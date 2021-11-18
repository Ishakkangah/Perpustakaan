<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukusTable extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('slug');
            $table->string('pengarang');
            $table->year('tahun_penerbit');
            $table->string('penerbit');
            $table->unsignedBigInteger('ISBN');
            $table->string('category_id');
            $table->foreignId('jumlah_buku');
            $table->string('lokasi');
            $table->string('asal_buku');
            $table->foreignId('jumlah_buku_per_rak');
            $table->date('tanggal_input');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
