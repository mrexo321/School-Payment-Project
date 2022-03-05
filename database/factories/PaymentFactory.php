<?php

namespace Database\Factories;

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
        return [
            //
            'officer_id' => rand(1,2),
            'student_id' => rand(1,2),
            'date_payment' => '2022-02-22',
            'month_payment' => 'february',
            'year_payment' => rand(2021 , 2022),
            'spp_id' => rand(1,3),
            'total_payment' => rand(200000,300000)
        ];
    }
}
