<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kategori');
            $table->char('kd_barang', 225);
            $table->char('nama', 225);
            $table->char('satuan', 225);
            $table->char('kategori', 225);
            $table->integer('stok');
            $table->integer('total_barang');
            $table->integer('harga_ecer');
            $table->integer('harga_grosir');
            $table->timestamps();
        });

        Schema::table('barang', function (Blueprint $table) {
            $table->foreign('id_kategori')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
