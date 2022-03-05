<?php

namespace Database\Seeders;

use App\Models\Spp;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Officer;
use App\Models\Payment;
use App\Models\Student;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Officer::factory(5)->create();
        Kelas::factory(5)->create();
        Spp::factory(5)->create();
        Student::factory(5)->create();
        Payment::factory(5)->create();
        User::factory(5)->create();


        Category::create([
            'name' => 'SPP',
            'image' => 'tes1.jpg'
        ]);

        Category::create([
            'name' => 'DSP',
            'image' => 'tes1.jpg'
        ]);

        Category::create([
            'name' => 'Bangunan',
            'image' => 'tes1.jpg'
        ]);
    }
}
