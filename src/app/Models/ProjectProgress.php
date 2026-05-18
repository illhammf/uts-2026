<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectProgress extends Model
{
    protected $table = 'project_progress'; // Menentukan nama tabel yang sesuai dengan migrasi

    protected $fillable = [

        'project_id',

        'judul_progress',

        'deskripsi_progress',

        'persentase',

        'status',

        'tanggal',
    ];

    /*
    |--------------------------------------------------------------------------
    | RELATION
    |--------------------------------------------------------------------------
    */

    public function project()
    {
        return $this->belongsTo(Project::class); // Setiap progress terkait dengan satu project
    }
}