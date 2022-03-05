<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'username' => $this->faker->userName(),
            'password' => bcrypt('password'),
            'officer_name' => $this->faker->name(),
            'role' => Str::random(10)
        ];
    }
}
