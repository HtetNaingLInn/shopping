<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\BannerSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Website_InfoSeeder::class);
        $this->call(Contact_UsSeeder::class);

        // \App\Models\User::factory(10)->create();
        $this->call([
            BannerSeeder::class,
        ]);

    }
}
