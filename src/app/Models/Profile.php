<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nama',
        'nim',
        'kampus',
        'prodi',
        'semester',
        'judul_profesi',
        'bio_singkat',
        'deskripsi_tentang',
        'email',
        'whatsapp',
        'github',
        'instagram',
        'foto',
    ];
}