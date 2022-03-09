<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsfeedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tag' => $this->faker->text(8),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->sentence(nbWords: 25),
            'author_email' => 'admin@kariinvestment.com',
        ];
    }
}
