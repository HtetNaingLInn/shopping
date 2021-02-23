<?php

namespace Database\Seeders;

use App\Models\Website_Info;
use Illuminate\Database\Seeder;

class Website_InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Website_Info::create([
             'name'=>'Asxox',
             'logo'=>'company_logo.png',
             'phone'=>'09-966906666 , 09-966907777',
             'email'=>'asxoxec@gmail.com',
             'address'=>' No.165 Tapin Shwe Htee Street, Yangon 11401',
             'facebook'=>'https://www.facebook.com/AsxoxOnline',
             'viber'=>'09-966906666'
         ]);
    }
}
