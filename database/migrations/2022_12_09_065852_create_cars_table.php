<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('slug');
            $table->integer('harga_sewa');
            $table->text('gambar');
            $table->string('bahan_bakar');
            $table->string('jumlah_kursi');
            $table->string('transmisi');
            $table->string('status');
            $table->text('deskripsi');
            $table->boolean('p3k');
            $table->boolean('charger');
            $table->boolean('audio');
            $table->boolean('ac');
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
        Schema::dropIfExists('cars');
    }
};
