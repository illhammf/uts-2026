<?php

namespace Database\Seeders;

use App\Models\ContactMessage;
use Illuminate\Database\Seeder;

class ContactMessageSeeder extends Seeder
{

    public function run(): void
    {
        ContactMessage::create([

            'nama' => 'Annisa Zahra Fauziah',
            'email' => 'annisazahra@gmail.com',
            'subjek' => 'Pertanyaan Layanan Print',
            'pesan' =>
                'Halo kak, apakah layanan print warna bisa untuk ukuran A4 dan berapa estimasi pengerjaannya?',
            'status' => 'baru',
        ]);

        ContactMessage::create([

            'nama' => 'Misel Oktaviani Putri',
            'email' => 'miseloktavianip@gmail.com',
            'subjek' => 'Belajar Bareng',
            'pesan' =>
                'Saya ingin bertanya apakah tersedia layanan belajar Microsoft Word untuk membuat laporan.',

            'status' => 'dibaca',
        ]);
    }
}