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
            'nis' => '12345678',
            'name' => $this->faker->name(),
            'class_id' => rand(1,5),
            'address' => $this->faker->address(),
            'spp_id' => rand(1,4)

        ];
    }
}
