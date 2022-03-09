<?php

namespace Tests\Feature\Auth;

use App\Models\PendingUserPhoneNumber;
use App\Models\User;
use App\Notifications\Auth\VerifyNewPhoneNumberSMS;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Queue;
use Tests\TestCase;

class PhoneVerificationTest extends TestCase
{
    use RefreshDatabase;

    
    public function it_doesnt_send_a_verification_mail_if_the_email_didnt_change()
    {
        Queue::fake();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $pendingPhoneNumber = new PendingUserPhoneNumber();

        $this->assertNull($pendingPhoneNumber->newPhoneNumber($user, $user->phone_number));

        Queue::assertNothingPushed();
    }

   
    public function it_can_generate_a_token_and_sms_it_to_the_new_phone_number()
    {
        Queue::fake();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $newPhoneNumber = '08034081311';

        $pendingPhoneNumber = (new PendingUserPhoneNumber())->newPhoneNumber($user, $newPhoneNumber);

        $this->assertInstanceOf(PendingUserPhoneNumber::class, $pendingPhoneNumber);

        $this->assertEquals('08034081360', $user->fresh()->phone_number);

        $this->assertDatabaseHas('pending_user_phone_numbers', [
            'user_id'   => $user->id,
            'phone_number'    => $newPhoneNumber,
            'token'     => $pendingPhoneNumber->token,
        ]);

        Queue::assertPushed(\Illuminate\Notifications\SendQueuedNotifications::class);

        $this->assertEquals($newPhoneNumber, $user->pendingPhoneNumber->phone_number);
    }

    
    public function it_can_regenerate_a_token_and_sms_it()
    {
        Queue::fake();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $newPhoneNumber = '08034081311';

        $pendingPhoneNumberFirst = (new PendingUserPhoneNumber())->newPhoneNumber($user, $newPhoneNumber);

        // reset queue fake
        Queue::fake();
        Queue::assertNothingPushed();

        $pendingPhoneNumberSecond =  $user->pendingPhoneNumber->resendPendingPhoneNumberVerificationSMS();

        // verify it deleted the first one
        $this->assertNull($pendingPhoneNumberFirst->fresh());

        // verify it generated a new token
        $this->assertNotEquals($pendingPhoneNumberFirst?->token, $pendingPhoneNumberSecond->token);

        $this->assertInstanceOf(PendingUserPhoneNumber::class,  $pendingPhoneNumberSecond);

        $this->assertEquals('08034081360', $user->fresh()->phone_number);

        $this->assertDatabaseHas('pending_user_phone_numbers', [
            'user_id'   => $user->id,
            'phone_number'    => $newPhoneNumber,
            'token'     => $pendingPhoneNumberSecond->token,
        ]);

        Queue::assertPushed(\Illuminate\Notifications\SendQueuedNotifications::class);

        $this->assertEquals($newPhoneNumber, $user->pendingPhoneNumber->phone_number);
    }

    
    public function it_deletes_previous_attempts_of_the_user_trying_to_verify_a_new_phone_number()
    {
        Queue::fake();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $newPhoneNumber = '08034081311';

        (new PendingUserPhoneNumber())->newPhoneNumber($user, $newPhoneNumber);
        $this->assertCount(1, PendingUserPhoneNumber::get());

        (new PendingUserPhoneNumber())->newPhoneNumber($user, '08034081312');
        $this->assertCount(1, PendingUserPhoneNumber::get());

        $this->assertDatabaseMissing('pending_user_phone_numbers', [
            'phone_number' =>  $newPhoneNumber,
        ]);
    }
}
