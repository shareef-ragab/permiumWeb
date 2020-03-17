<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(content_static::class);
        $this->call(user::class);
        $this->call(explore_our_offering::class);
        $this->call(improve_and_innovate_with_the_tech_trends::class);
        $this->call(solutions_we_deliver::class);
        $this->call(customers_say::class);
        $this->call(reognitions_partnerships::class);
    }
}
