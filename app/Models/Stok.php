<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    public $table = "stok";
    protected $fillable = ['kode_barang', 'quantity'];
}