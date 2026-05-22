<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{

    public function run(): void
    {
        Project::create([
            'judul' => 'Tukang Print Dadakan',
            'slug' => 'tukang-print-dadakan',
            'deskripsi_singkat' =>
                'Sistem booking layanan print mahasiswa berbasis Laravel.',

            'analisis_masalah' =>
                'Proses pemesanan layanan print masih dilakukan secara manual melalui WhatsApp sehingga kurang terstruktur dan berisiko terjadi kesalahan pencatatan data.',

            'kebutuhan_sistem' =>
                'Sistem membutuhkan fitur booking online, upload file, pembayaran digital, dashboard admin, integrasi WhatsApp, dan manajemen data pesanan.',

            'arsitektur' =>
                'Aplikasi menggunakan arsitektur MVC berbasis Laravel dengan Docker sebagai container development dan MariaDB sebagai database.',

            'tech_stack' =>
                'Laravel, PHP, Blade Template, Docker, MariaDB, GitHub, Visual Studio Code',

            'status_project' => 'progress',

            'progress' => 45,

            'gambar_erd' => 'front/diagram/erd.png',

            'gambar_flowchart' => 'front/diagram/flowchart.png',

            'file_laporan' => 'front/laporan/laporan-uts.pdf',
        ]);
    }
}