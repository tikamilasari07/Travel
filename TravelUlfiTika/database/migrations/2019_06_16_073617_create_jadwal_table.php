<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJadwalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supir_id')->unsigned();
            $table->integer('car_id')->unsigned();
            $table->integer('dari')->unsigned();
            $table->integer('tujuan')->unsigned();
            $table->date('tanggal');
            $table->time('jam');
            $table->double('harga_tiket');
            $table->timestamps();
        });

        Schema::table('jadwal', function (Blueprint $table) {
            $table->foreign('supir_id')->references('id')->on('supir')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('car')->onDelete('cascade');
            $table->foreign('dari')->references('id')->on('wilayah')->onDelete('cascade');
            $table->foreign('tujuan')->references('id')->on('wilayah')->onDelete('cascade');
        });

        Schema::table('pemesanan', function (Blueprint $table) {
            $table->foreign('jadwal_id')->references('id')->on('jadwal')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadwal');
    }
}
