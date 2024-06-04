<?php

namespace Database\Seeders;

use App\Models\Krs;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\semester;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listMahasiswa = Mahasiswa::get();
        $listMatakuliah = MataKuliah::get();
        $listSemester = semester::get();
        foreach ($listMahasiswa as $mahasiswa) {
            $indexMatkul = 0;
            foreach ($listMatakuliah as $matakuliah) {
                $nilai = fake()->numberBetween(0, 100);
                if ($mahasiswa->nim == '2105551010') {
                    $nilai = 100;
                }

                $semester = $listSemester[$indexMatkul % 6];

                Krs::create([
                    'mahasiswa_id' => $mahasiswa->id,
                    'mata_kuliah_id' => $matakuliah->id,
                    'semester_id' => $semester->id,
                    'nilai' => $nilai
                ]);

                $indexMatkul++;
            }
        }
    }
}
