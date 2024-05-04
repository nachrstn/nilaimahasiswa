<?php

namespace Database\Seeders;

use App\Models\Krs;
use App\Models\MataKuliah;
use App\Models\semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KrsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listMahasiswa = MataKuliah::get();
        $listMatakuliah = MataKuliah::get();
        $listSemester = semester::get();
        foreach ($listMahasiswa as $mahasiswa) {
            $indexMatkul = 0;
            foreach ($listMatakuliah as $matakuliah) {
                $nilai = fake()->numberBetween(0, 100);
                if ($mahasiswa->nim == '2105551010') {
                    $nilai = 100;
                }

                if ($indexMatkul > 5) {
                    $semester = $listSemester[5];
                } else {
                    $semester = $listSemester[$indexMatkul];
                }

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
