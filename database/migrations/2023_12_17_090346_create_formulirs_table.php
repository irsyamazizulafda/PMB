<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nama_lengkap')->nullable();
            $table->integer('nik')->nullable();
            $table->string('alamat_ktp')->nullable();
            $table->string('alamat_lengkap')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->integer('no_telepon')->nullable();
            $table->integer('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->date('tanggal_lahir')->nullable()->date('d-m-y');
            $table->string('tempat_lahir')->nullable();
            $table->string('kabupaten_lahir')->nullable();
            $table->string('provinsi_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('status_menikah')->nullable();
            $table->string('agama')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formulirs');
    }
};
