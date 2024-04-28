<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::create([
            'nim' => '2105551010',
            'name' => 'Maria Christina Hartono',
            'angkatan' => '2021',
            'jk' => 'perempuan',
            'telepon' => '081234567890',
            'agama' => 'Kristen',
            'alamat' => 'Badung, Bali'
        ]);
        Mahasiswa::factory(100)->create();
    }
}
