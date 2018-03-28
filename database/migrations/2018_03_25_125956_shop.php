<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ikan');
            $table->integer('kategori_id')->unsigned();
            $table->string('harga');
            $table->string('ukuran');
            $table->string('stok');
            $table->string('foto');
            $table->text('keterangan');
            $table->timestamps();
        });

        Schema::table('shop',function (Blueprint $t){
            $t->foreign('kategori_id')->references('id')->on('Kshop')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop');
    }
}
