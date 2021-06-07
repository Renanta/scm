<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $fillable = [
        'nama_perusahaan', 'nama_toko', 'alamat', 'barang', 'stok', 'harga_satuan'
    ];
}
