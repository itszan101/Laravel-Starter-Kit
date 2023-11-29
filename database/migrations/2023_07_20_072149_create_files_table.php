<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->string('nama_pemilik');
            $table->string('name');
            $table->string('path');
            $table->string('jenis_dokumen');
            $table->string('luas_bumi');
            $table->string('luas_bangunan');
            $table->string('lokasi_lingkungan');
            $table->string('lokasi_rt');
            $table->foreignId('user_id')->index()->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}
