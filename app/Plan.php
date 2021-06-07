<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'nama_proyek', 'koor', 'nama_bahan', 'banyak_bahan', 'harga_satuan', 'nama_suplier', 'alamat_suplier'
    ];
}
