<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('judul', 45);
            $table->string('varchar');
            $table->date('tanggal_dibuat');
            $table->date('tanggal_diperbaharui');
            $table->Integer('jawaban_tepat_id')->unsigned();
            $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
            $table->unsignedInteger('profil_id')->nullable();
            $table->foreign('profil_id')->references('id')->on('profil');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
