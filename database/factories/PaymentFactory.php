<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
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
            'tag' => $this->faker->text(12),
            'refcode' => $this->faker->uuid(),
            'status' => true,
            'plan_id' => $plan->id,
        ];
    }
}
