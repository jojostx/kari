<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $phone = '080340' . strval($this->faker->unique()->randomNumber(5, true));

        return [
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone_number' => $phone,
            'phone_number_e164' => phone($phone, 'NG')->formatE164(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'created_at' => \now(),
            'updated_at' => \now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function () {
            return [
                'email_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the model's email address should be verified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function verified()
    {
        return $this->state(function () {
            return [
                'email_verified_at' => now(),
            ];
        });
    }

    /**
     * Indicate that the model's phone should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified_phone()
    {
        return $this->state(function () {
            return [
                'phone_verified_at' => null,
            ];
        });
    }

    /**
     * Indicate that the model's phone should be verified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function verified_phone()
    {
        return $this->state(function (array $attributes) {
            return [
                'phone_verified_at' => now(),
            ];
        });
    }

    /**
     * Indicate that the model's is an admin.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function admin()
    {
        return $this->state(function () {
            return [
                'is_admin' => true,
            ];
        });
    }
}
