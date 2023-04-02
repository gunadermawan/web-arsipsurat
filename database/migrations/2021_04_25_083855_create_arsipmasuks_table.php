<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArsipmasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arsipmasuks', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('NomorSurat');
            $table->string('NamaSurat');
            $table->string('JenisSurat');
            $table->string('pengirim');
            $table->string('tujuan');
            $table->string('surat');
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
        Schema::dropIfExists('arsipmasuks');
    }
}
