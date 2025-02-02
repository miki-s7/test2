<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
        'name' => '春'
        ];
        DB::table('season')->insert($param);

        $param = [
        'name' => '夏'
        ];
        DB::table('season')->insert($param);

        $param = [
        'name' => '秋'
        ];
        DB::table('season')->insert($param);

        $param = [
        'name' => '冬'
        ];
        DB::table('season')->insert($param);
    }
}
