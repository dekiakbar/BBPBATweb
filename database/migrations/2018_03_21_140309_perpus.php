<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perpus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul_buku');
            $table->string('penerbit');
            $table->integer('kategori_id')->unsigned();
            $table->string('tahun_terbit');
            $table->timestamps();
        });

        Schema::table('perpus',function (Blueprint $t){
            $t->foreign('kategori_id')->references('id')->on('kategoriPerpus')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perpus');
    }
}
