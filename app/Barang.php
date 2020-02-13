<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'barangs';
    protected $fillable = [
    	'nama_barang',
    	'harga_awal',
    	'deskripsi_barang',
    	'tanggal',
    ];
}
