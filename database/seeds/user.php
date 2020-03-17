<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO users(`name`,`email`,`password`)VALUES('shareef ragab','100shareef10000ps@gmail.com','shareef100');");
    }
}
