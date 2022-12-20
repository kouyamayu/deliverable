<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            'name'=>'函館市',
            'prefecture_id'=>1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
            
        DB::table('cities')->insert([
            'name'=>'千代田区',
            'prefecture_id'=>2,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
        
        DB::table('cities')->insert([
            'name'=>'札幌市',
            'prefecture_id'=>1,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
    }
}
