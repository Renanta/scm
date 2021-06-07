<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'nama_koor', 'bahan_pesanan', 'jumlah_pesanan', 'harga_satuan'
    ];
}
