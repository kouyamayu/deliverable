<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class GymSeeder extends Seeder
{
    public function run()
    {
        DB::table('gyms')->insert([
            'name'=>'FIT24　函館昭和店',
            'city_id'=>1,
            'price'=>6800,
            'is_24_hours'=>1,
            'contents'=>'あ',
            'url'=>'https://www.fit24.jp/shop/hakodate.html',
            'address'=>'北海道函館市昭和3-31-12',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
       
        DB::table('gyms')->insert([
            'name'=>'chocoZAP 麹町',
            'city_id'=>2,
            'price'=>2980,
            'is_24_hours'=>1,
            'contents'=>'い',
            'url'=>'https://chocozap.jp/shoplist/?_gl=1*ipz1f5*_gcl_aw*R0NMLjE2NzEyMzkxNzYuQ2p3S0NBaUF5X0NjQmhCZUVpd0Fjb01SSEpleFR0WnB4bTZEMEtRV3FpNGRxUGlNMl8tM2xKU1EwdHdHcE5DdjVvcVo4b2MxazhhS2xCb0NLbG9RQXZEX0J3RQ..*_ga*NzEzNDc2MjY5LjE2NzEyMzkxNzY.*_ga_GQCE0L4WC2*MTY3MTIzOTE3Ni4xLjAuMTY3MTIzOTE3Ni42MC4wLjA.&_ga=2.171916197.407678398.1671239177-713476269.1671239176&_gac=1.59876703.1671239177.CjwKCAiAy_CcBhBeEiwAcoMRHJexTtZpxm6D0KQWqi4dqPiM2_-3lJSQ0twGpNCv5oqZ8oc1k8aKlBoCKloQAvD_BwE#/shop/9',
            'address'=>'東京都千代田区麹町4-2-1MK麹町ビル B1F',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
            
        DB::table('gyms')->insert([
            'name'=>'HYPER FIT Nex 24 札幌北25条店',
            'city_id'=>3,
            'price'=>6500,
            'is_24_hours'=>1,
            'contents'=>'う',
            'url'=>'https://www.alltimefitness.jp/gym_nex/hokkaido/sapporo-kita-25jyo/#gym-info',
            'address'=>'北海道札幌市東区北25条東８丁目2-1（ダイヤ書房本店２階）',
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime(),
            ]);
   
    }
}
