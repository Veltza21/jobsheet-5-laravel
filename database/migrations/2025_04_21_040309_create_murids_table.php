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
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table ->char('NIS', 20)->unique;
            $table ->string('nama_siswa', 60);
            $table ->enum('jenis_kelamin', [ 'P','L']);
            $table ->string('tempat_lahir', 60);
            $table ->date('tanggal_lahir');
            $table ->foreignId('kelas_id')->constrained();
            $table ->foreignId('wali_murid_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('murids');
    }
};
