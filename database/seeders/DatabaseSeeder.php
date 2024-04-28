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
        ]);

        // Generate Seeder for KRS
        $listMahasiswa = Mahasiswa::get();
        $listMatakuliah = MataKuliah::get();
        foreach ($listMahasiswa as $mahasiswa) {
            foreach ($listMatakuliah as $matakuliah) {
                $nilai = fake()->numberBetween(0, 100);
                if ($mahasiswa->nim == '2105551010') {
                    $nilai = 100;
                }

                Krs::create([
                    'mahasiswa_id' => $mahasiswa->id,
                    'mata_kuliah_id' => $matakuliah->id,
                    'nilai' => $nilai
                ]);
            }
        }
    }
}
