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
        Schema::create('guru_siswas', function (Blueprint $table) {
            $table->unsignedBigInteger('siswa_id');
            // $table->foreignId('siswa_id')->constrained('siswas');
            // $table->foreignId('guru_id')->constrained('gurus');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->unsignedBigInteger('guru_id');
            $table->foreign('guru_id')->references('id')->on('gurus');
            $table->unsignedBigInteger('pelanggaran_id');
            $table->foreign('pelanggaran_id')->references('id')->on('pelanggarans');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru_siswas');
    }
};
