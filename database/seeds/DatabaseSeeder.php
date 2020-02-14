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
        $this->call(BarangsTableSeeder::class);
        $this->call(LevelsTableSeeder::class);        
        $this->call(MasyarakatsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
