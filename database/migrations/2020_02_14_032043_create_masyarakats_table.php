<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_lengkap',30);
            $table->string('email',191)->unique()->nullable();
            $table->string('password');
            $table->string('no_telp');
            //$table->integer('id_akun')->unsigned()->nullable();
            //$table->foreign('id_akun')->references('id')->on('users')->onUpdate('set null')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masyarakats');
    }
}
