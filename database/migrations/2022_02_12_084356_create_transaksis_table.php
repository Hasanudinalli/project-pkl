<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();

            $table->BigInteger('kode_produk')->unsigned();
            $table->foreign("kode_produk")->references('id')
                ->on('transaksis')->onUpdate('cascade')
                ->onDelete('cascade');

            $table->string('nama_produk');
            $table->integer('harga_beli');





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
        Schema::dropIfExists('transaksis');
    }
}
