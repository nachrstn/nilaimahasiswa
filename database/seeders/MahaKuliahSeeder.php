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
        MataKuliah::create([
            'name' => 'Pengujian Perangkat Lunak',
            'sks' => '2'
        ]);

        MataKuliah::create([
            'name' => 'Data Mining',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Machine Learning',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Big Data',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'UI/UX',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Algoritma',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrograman Internet',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Pemrograman Mobile',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Agama',
            'sks' => '3'
        ]);

        MataKuliah::create([
            'name' => 'Bahasa Indonesia',
            'sks' => '3'
        ]);
    }
}
