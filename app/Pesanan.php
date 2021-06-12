<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    protected $fillable = [
        'nama_bahan', 'jumlah_bahan', 'harga_satuan', 'updated_at', 'status_pembayaran', 'status_pesanan'
    ];
}
