<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Krs;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MataKuliahSeeder::class,
            MahasiswaSeeder::class,
            SemesterSeeder::class,
            KrsSeeder::class
        ]);
    }
}
