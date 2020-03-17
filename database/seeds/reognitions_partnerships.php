<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class reognitions_partnerships extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO reognitions_partnerships(`image`)VALUES("/img/asset.png");');
        DB::insert('INSERT INTO reognitions_partnerships(`image`)VALUES("/img/asset.png");');
        DB::insert('INSERT INTO reognitions_partnerships(`image`)VALUES("/img/asset.png");');
        DB::insert('INSERT INTO reognitions_partnerships(`image`)VALUES("/img/asset.png");');
        DB::insert('INSERT INTO reognitions_partnerships(`image`)VALUES("/img/asset.png");');
    }
}
