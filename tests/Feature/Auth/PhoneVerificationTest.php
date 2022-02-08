<?php

namespace Tests\Feature\Auth;

use App\Models\PendingUserPhoneNumber;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PhoneVerificationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_doesnt_send_a_verification_mail_if_the_email_didnt_change()
    {
        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $pendingPhoneNumber = new PendingUserPhoneNumber();

        $this->assertNull($pendingPhoneNumber->newPhoneNumber($user, $user->phone_number));
    }
}
