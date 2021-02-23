<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photo = ["a.png","b.png","c.png"];
        $link = ["http://localhost:8000/admin/home","http://localhost:8000/admin/home","http://localhost:8000/admin/home"];
        $status = ["Active","InActive"];
        for($i =0;$i<10; $i++){
                DB::table('banners')->insert([
                    'photo' => $photo[rand(0,2)],
                    'link' => $link[rand(0,2)],
                    'status' =>$status[rand(0,1)],
                    ]);
                }
    }
}
