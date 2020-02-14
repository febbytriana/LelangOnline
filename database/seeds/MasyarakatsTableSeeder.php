<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MasyarakatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masyarakats')->insert([
            'id'            => '1',
        	'nama_lengkap'  => 'Masyarakat 1',
        	'email'         => 'masyarakat@gmail.com',
        	'password'      => '$2y$10$JLSqcrQR5RuHNZI.O/36aOb0AXM7ses65YeJrwi1BfsWgFlZJE4n.', //admin123
        	'no_telp'		=> '086364782373',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);
    }
}
