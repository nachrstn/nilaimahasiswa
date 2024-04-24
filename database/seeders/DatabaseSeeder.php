<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Mahasiswa::create([
            'nim' => '2105551010',
            'name' => 'Maria Christina Hartono',
            'angkatan' => '2021',
            'jk' => 'perempuan',
            'telepon' => '081234567890',
            'agama' => 'Kristen',
            'alamat' => 'Badung, Bali'
        ]);
    }
}
