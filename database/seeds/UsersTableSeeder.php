<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'            => '1',
        	'name'          => 'Admin',
        	'email'         => 'admin@gmail.com',
        	'password'      => '$2y$10$JLSqcrQR5RuHNZI.O/36aOb0AXM7ses65YeJrwi1BfsWgFlZJE4n.', //admin123
            'id_level'      => '1',
        	'remember_token'=> '1',
        	'created_at'	=> Carbon::now(),
        	'updated_at'	=> Carbon::now(),
        ]);
        DB::table('users')->insert([
            'id'            => '2',
            'name'          => 'Petugas',
            'email'         => 'petugas@gmail.com',
            'password'      => '$2y$10$1ippj3AblbVBy69Igt.SJ.TVHdT1UcK4QRWQ/Mp3h3qrxkTNzm1fm', //petugas123
            'id_level'      => '2',
            'remember_token'=> '1',
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);
    }
}