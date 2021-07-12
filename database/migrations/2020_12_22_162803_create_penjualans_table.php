<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->increments('id_penjualan')->primary();
            $table->integer('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('id_barang');
            $table->foreign('id_barang')->references('id_barang')->on('barangs');
            $table->integer('jumlah',10);
            $table->integer('total_harga',20);
            $table->date('tgl_jual');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penjualans');
    }
}
