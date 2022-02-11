<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $plan = Plan::first();

        return [
            'interest' => $plan->interest,
            'principal'=>  $plan->principal,
            'plan_id' => $plan->id,
            'ends_at' => now()->addYear(),
            'next_payout_at' => now()->addMonths(\config('app.payout_period', 6)),
        ];

    }
}
