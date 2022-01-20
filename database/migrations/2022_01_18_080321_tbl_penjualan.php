<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualan', function (Blueprint $table) {
            $table->increments('id_penjualan');
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('id_pelayan');
            $table->unsignedBigInteger('id_pembayaran');
            $table->integer('satuan');
            $table->date('tanggal');
            $table->integer('harga_brg');
            $table->integer('jml_beli');
            $table->integer('total_harga');
            $table->timestamps();
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_pelayan')->references('id')->on('users');
            $table->foreign('id_pembayaran')->references('id')->on('pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualan');
    }
}
