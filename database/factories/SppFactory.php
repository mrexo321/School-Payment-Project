<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SppFactory extends Factory
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
            'year' => rand(1,12),
            'total' => rand(200000,300000)
        ];
    }
}
