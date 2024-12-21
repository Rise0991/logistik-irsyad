<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    public $table = "barang_keluar";
    protected $fillable = ['no_barang_keluar', 'kode_barang', 'quantity', 'destination', 'tanggal_keluar'];
}
