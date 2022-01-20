<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('harga', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pembelian');
            $table->unsignedBigInteger('id_barang');
            $table->date('tgl_beli');
            $table->integer('harga_ecer');
            $table->integer('harga_grosir');
            $table->integer('harga_jual');
            $table->enum('active', ['aktif', 'tidak aktif']);
            $table->timestamps();
            $table->foreign('id_pembelian')->references('id')->on('pembelian');
            $table->foreign('id_barang')->references('id')->on('barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('harga');
    }
}
