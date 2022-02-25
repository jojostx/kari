<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bank_name' => $this->faker->company(),
            'account_name' => $this->faker->name(),
            'account_number' => $this->faker->randomNumber(10, true),
        ];
    }
}
