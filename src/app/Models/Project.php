<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [

        'judul',
        'slug',

        'deskripsi_singkat',
        'analisis_masalah',
        'kebutuhan_sistem',

        'arsitektur',
        'tech_stack',

        'status_project',
        'progress',

        'gambar_erd',
        'gambar_flowchart',

        'file_laporan',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    public function progresses()
    {
        return $this->hasMany(ProjectProgress::class); // Setiap project memiliki banyak progress
    }
}