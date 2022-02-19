<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belis', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_konsumen');

            $table->BigInteger('kode_produk')->unsigned();
            $table->foreign('kode_produk')
            ->references('id')
            ->on('produks')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->BigInteger('kode_transaksi')->unsigned();
            $table->foreign('kode_transaksi')
            ->references('id')
            ->on('transaksis')->onUpdate('cascade')
            ->onDelete('cascade');

            $table->BigInteger('kode_pelanggan')->unsigned();
            $table->foreign('kode_pelanggan')
            ->references('id')
            ->on('pelanggans')->onUpdate('cascade')
            ->onDelete('cascade');
            $table->integer('jumlah_produk');
            $table->integer('total_harga');




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
        Schema::dropIfExists('belis');
    }
}
