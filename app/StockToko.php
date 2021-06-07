<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockToko extends Model
{
    protected $fillable = [
        'nama_bahan', 'harga_satuan', 'jumlah_stok', 'keterangan'
    ];
}
