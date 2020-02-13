<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BarangsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            'id'            	=> '1',
        	'nama_barang'   	=> 'Jam Tangan',
        	'harga_awal'    	=> '700000',
        	'deskripsi_barang'  => '-',
        	'tanggal'       	=> '2020-02-13',
        	'created_at'		=> Carbon::now(),
        	'updated_at'		=> Carbon::now(),
        ]);
        DB::table('barangs')->insert([
            'id'            	=> '2',
        	'nama_barang'   	=> 'Tas',
        	'harga_awal'    	=> '250000',
        	'deskripsi_barang'  => '-',
        	'tanggal'       	=> '2020-02-13',
        	'created_at'		=> Carbon::now(),
        	'updated_at'		=> Carbon::now(),
        ]);
        DB::table('barangs')->insert([
            'id'            	=> '3',
        	'nama_barang'   	=> 'Sepatu',
        	'harga_awal'    	=> '300000',
        	'deskripsi_barang'  => '-',
        	'tanggal'       	=> '2020-02-13',
        	'created_at'		=> Carbon::now(),
        	'updated_at'		=> Carbon::now(),
        ]);
    }
}
