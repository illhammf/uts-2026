<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'nama' => 'Ilham Firmansyah',
            'nim' => '20240801102',
            'kampus' => 'Universitas Esa Unggul',
            'prodi' => 'Teknik Informatika',
            'semester' => '4',

            'judul_profesi' => 'Mahasiswa & Web Developer',
            
            'bio_singkat' => 'Mahasiswa Teknik Informatika yang fokus pada pengembangan website berbasis Laravel dan Filament.',

            'deskripsi_tentang' => 'Saya adalah mahasiswa semester 4 Teknik Informatika Universitas Esa Unggul yang memiliki minat pada pengembangan website, backend development, dan manajemen database menggunakan Laravel, Filament, PHP, dan MySQL.',

            'email' => 'ilham@example.com',
            'whatsapp' => '08123456789',
            'github' => 'https://github.com/illhammf',
            'instagram' => 'https://instagram.com/illhammf',

            'foto' => 'front/images/profile.jpg',
        ]);
    }
}