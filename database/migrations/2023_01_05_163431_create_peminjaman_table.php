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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id('id_pinjam');
            $table->foreignId('id_user')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeonDelete();
            $table->foreignId('id_ruang')->nullable()->constrained('ruang')->cascadeOnUpdate()->cascadeonDelete();
            $table->date('tgl_pinjam');
            $table->string('jam_mulaipinjam');
            $table->string('jam_selesaipinjam');
            $table->string('tingkat');
            $table->integer('no_hp');
            $table->string('email');
            $table->string('acara');
            $table->string('deskripsi_pinjam');
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
        Schema::dropIfExists('peminjaman');
    }
};
