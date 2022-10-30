<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_models', function (Blueprint $table) {
            $table->id('no');
            $table->char('kode_barang',10);
            $table->string('nama_barang');
            $table->string('detail');
            $table->integer('harga');
            $table->integer('stock');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko_models');
    }
}
