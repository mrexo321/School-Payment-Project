<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'nisn' => rand(),
            'nis' => rand(1,1000),
            'name' => $this->faker->name(),
            'class_id' => rand(1,5),
            'address' => $this->faker->address(),

        ];
    }
}
