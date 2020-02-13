<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'id'            => '1',
        	'level'         => 'Administrator',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);  
        DB::table('levels')->insert([
            'id'            => '2',
        	'level'         => 'Petugas',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);  
    }
}
