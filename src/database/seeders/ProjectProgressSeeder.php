<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectProgress;
use Illuminate\Database\Seeder;

class ProjectProgressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $project = Project::first();

        if (!$project) {
            return;
        }

        $progress = [

            [
                'judul_progress' => 'Analisis Kebutuhan Sistem',
                'deskripsi_progress' => 'Melakukan analisis kebutuhan sistem dan identifikasi masalah.',
                'persentase' => 15,
                'status' => 'selesai',
                'tanggal' => now(),
            ],

            [
                'judul_progress' => 'Pembuatan Diagram Sistem',
                'deskripsi_progress' => 'Membuat Use Case Diagram, ERD, DFD, dan Flowchart.',
                'persentase' => 35,
                'status' => 'selesai',
                'tanggal' => now(),
            ],

            [
                'judul_progress' => 'Pembuatan Website Portofolio',
                'deskripsi_progress' => 'Membuat website portofolio Laravel untuk UTS.',
                'persentase' => 55,
                'status' => 'progress',
                'tanggal' => now(),
            ],

            [
                'judul_progress' => 'CRUD & Dashboard Admin',
                'deskripsi_progress' => 'Membuat panel admin menggunakan Filament.',
                'persentase' => 75,
                'status' => 'belum',
                'tanggal' => now(),
            ],

        ];

        foreach ($progress as $item) {

            ProjectProgress::create([

                'project_id' => $project->id,

                'judul_progress' => $item['judul_progress'],

                'deskripsi_progress' => $item['deskripsi_progress'],

                'persentase' => $item['persentase'],

                'status' => $item['status'],

                'tanggal' => $item['tanggal'],
            ]);
        }
    }
}