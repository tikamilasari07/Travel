<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePemesananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('jadwal_id')->unsigned();
            $table->string('no_invoice')->nullable();
            $table->string('nama_pemesan');
            $table->string('alamat');
            $table->string('no_tlp');
            $table->string('email');
            $table->integer('jumlah_pemesanan');
            $table->text('nama_penumpang');
            $table->enum('status',['berhasil','gagal','diproses','belum_diproses'])->default('belum_diproses');
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
        Schema::dropIfExists('pemesanan');
    }
}
