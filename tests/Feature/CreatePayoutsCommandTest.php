<?php

namespace Tests\Feature;

use App\Models\Payment;
use App\Models\Payout;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreatePayoutsCommandTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /**
     * test that the command creates new payouts at the
     * biannual period and the total number of payouts is one
     * equal to one
     *
     * @return void
     */
    public function test_command_creates_a_payout_at_the_required_period()
    {
        $this->seed();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();

        $payment = Payment::factory()->create([
            'user_id' => $user->id, 
            'tag' => $this->faker->text(12),
            'refcode' => $this->faker->uuid(),
            'status' => true,
            'plan_id' => 1,
        ]);

        $subscription = Subscription::factory()->create([
            'user_id' => $user->id,
            'tag' => $payment->tag,
            'payment_id' => $payment->id,
            'refcode' => $payment->refcode,
            'next_payout_at' => now()->addMonths(\config('app.payout_period', 6)),
        ]);

        $this->travel(7)->months();

        $this->artisan('create:payouts')->assertSuccessful();

        $this->assertEquals(1, $subscription->payouts->count());
    }

    /**
     * test that the command does not create new payouts until the
     * biannual period elapses and the total number of payouts is one
     * less than the max_payout_count for the period
     *
     * @return void
     */
    public function test_command_does_not_create_any_payout_before_the_required_period()
    {
        $this->seed();

        $user = User::factory()
            ->verified()
            ->verified_phone()
            ->create();
    
        $payment = Payment::factory()->create(['user_id' => $user->id]);

        $subscription = Subscription::factory()->create([
            'user_id' => $user->id,
            'tag' => $payment->tag,
            'payment_id' => $payment->id,
            'refcode' => $payment->refcode,
            'next_payout_at' => now()->addMonths(\config('app.payout_period', 6)),
        ]);

        $this->travel(5)->months();

        $this->artisan('create:payouts')->assertSuccessful();

        $this->assertEquals(0, $subscription->payouts->count());
    }
}
