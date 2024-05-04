<?php

namespace Database\Seeders;

use App\Models\semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'name' => '2021/2022 Ganjil',
            'start_year' => 2021,
            'end_year' => 2022,
            'tipe' => 'ganjil'
        ]);
        Semester::create([
            'name' => '2021/2022 Genap',
            'start_year' => 2021,
            'end_year' => 2022,
            'tipe' => 'genap'
        ]);
        Semester::create([
            'name' => '2022/2023 Ganjil',
            'start_year' => 2022,
            'end_year' => 2023,
            'tipe' => 'ganjil'
        ]);
        Semester::create([
            'name' => '2022/2023 Genap',
            'start_year' => 2022,
            'end_year' => 2023,
            'tipe' => 'genap'
        ]);
        Semester::create([
            'name' => '2023/2024 Ganjil',
            'start_year' => 2023,
            'end_year' => 2024,
            'tipe' => 'ganjil'
        ]);
        Semester::create([
            'name' => '2023/2024 Genap',
            'start_year' => 2023,
            'end_year' => 2024,
            'tipe' => 'genap'
        ]);
    }
}
