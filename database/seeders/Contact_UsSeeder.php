<?php

namespace Database\Seeders;

use App\Models\Contact_Us;
use Faker\Factory;
use Illuminate\Database\Seeder;

class Contact_UsSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Contact_Us::create([
                'name' => $faker->text('10'),
                'phone' => '0942001111',
                'title' => $faker->text('15'),
                'message' => $faker->text('100'),
                'isread' => rand(0, 1),
            ]);
        }
    }
}
