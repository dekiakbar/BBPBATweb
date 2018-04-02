<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pkl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkl', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_kegiatan');
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('no');
            $table->string('nama_instansi');
            $table->string('alamat_instansi');
            $table->string('alamat_tinggal');
            $table->string('judul_kegiatan');
            $table->varchar('mulai');
            $table->varchar('selesai');
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
        Schema::dropIfExists('pkl');
    }
}
