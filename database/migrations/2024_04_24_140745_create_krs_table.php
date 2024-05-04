<?php

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\semester;
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
        Schema::create('krs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mahasiswa::class, 'mahasiswa_id')
                ->references('id')->on('mahasiswas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(MataKuliah::class, 'mata_kuliah_id')
                ->references('id')->on('mata_kuliah')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(semester::class, 'semester_id')
                ->references('id')->on('semester')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedInteger('nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('krs');
    }
};
