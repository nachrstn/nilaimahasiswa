<?php

namespace Database\Seeders;

use App\Models\MataKuliah;
use Illuminate\Database\Seeder;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Semester 1
        MataKuliah::create([
            'name' => 'Bahasa Inggris',
            'sks' => '2'
        ]);

        MataKuliah::create([
            'name' => 'Agama',
            'sks' => '2'
        ]);

        MataKuliah::create([
            'name' => 'Algoritma dan Pemrograman',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Konsep Basis Data',
            'sks' => '3'
        ]);


        //Semester 2
        MataKuliah::create([
            'name' => 'Technopreneurship',
            'sks' => '2'
        ]);

        MataKuliah::create([
            'name' => 'Arsitektur Sistem Teknologi Informasi',
            'sks' => '2'
        ]);

        MataKuliah::create([
            'name' => 'Jaringan Komputer dan Komunikasi',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrograman Berorientasi Objek',
            'sks' => '3'
        ]);

        //Semester 3
        MataKuliah::create([
            'name' => 'Interpersonal Life Skill',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Manajemen Jaringan dan Server',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrograman Internet',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Rekayasa Perangkat Lunak',
            'sks' => '3'
        ]);

        //Semester 4
        MataKuliah::create([
            'name' => 'Sistem Enterprise',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Analisis Desain Sistem Informasi',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrograman Mobile',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Integrasi dan Migrasi Sistem',
            'sks' => '3'
        ]);

        //Semester 5
        MataKuliah::create([
            'name' => 'Forensik TI',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Kecerdasan Tiruan',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrosesan Bahasa Alami',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Riset Teknologi Informasi',
            'sks' => '3'
        ]);

        //Semester 6
        MataKuliah::create([
            'name' => 'Machine Learning',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Data Mining',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Big Data',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Visi Komputer',
            'sks' => '3'
        ]);

    }
}
