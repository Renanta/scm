<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'nama_proyek', 'koor', 'lokasi', 'progress', 'kendala'
    ];
}
