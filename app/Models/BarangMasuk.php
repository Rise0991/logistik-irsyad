<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    public $table = "barang_masuk";
    protected $fillable = ['no_barang_masuk', 'kode_barang', 'quantity', 'origin', 'tanggal_masuk'];
}
