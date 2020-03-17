<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class solutions_we_deliver extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
        DB::insert('INSERT INTO solutions_we_deliver(content,link)VALUES("Lorem ipsum","#");');
    }
}
