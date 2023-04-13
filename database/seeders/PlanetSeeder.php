<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // paramに配列を代入
        $param = [[
            'name' => '水星',
            'enname' => 'MERCURY',
            'radius' => '2493',
            'weight' => '3310'
            
        ],
        [
            'name' => '金星',
            'enname' => 'VENUS',
            'radius' => '6052',
            'weight' => '48700'
                    ],
        [
            'name' => '地球',
            'enname' => 'EARTH',
            'radius' => '6378',
            'weight' => '59760'
                    ]];
        // DB::table->insertでレコードの登録
        DB::table('planets')->insert($param);
    }
}
