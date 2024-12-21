<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangMasuk;
use App\Models\BarangKeluar;
use App\Models\Stok;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    // Barang Masuk
    public function daftarBarangMasuk() {
        $barangMasuk = BarangMasuk::all();
        return view('barang_masuk.daftar', compact('barangMasuk'));
    }

    public function formBarangMasuk() {
        return view('barang_masuk.form');
    }

    public function simpanBarangMasuk(Request $request) {
        BarangMasuk::create($request->all());

        Stok::updateOrCreate(
            ['kode_barang' => $request->kode_barang],
            ['quantity' => DB::raw('quantity + '.$request->quantity)]
        );

        $barangKeluar = BarangKeluar::orderBy('kode_barang', 'asc')->get();
        return redirect()->route('barang_masuk.daftar');
    }

    // Barang Keluar
    public function daftarBarangKeluar() {
        $barangKeluar = BarangKeluar::all();
                
        $barangKeluar = BarangKeluar::orderBy('no_barang_keluar', 'asc')->get();
        return view('barang_keluar.daftar', compact('barangKeluar'));
    }

    public function formBarangKeluar() {
        return view('barang_keluar.form');
    }

    public function simpanBarangKeluar(Request $request) {
        $request->validate([
            'kode_barang' => 'required',
            'quantity' => 'required|integer|min:1', 
        ]);
    
        $stok = Stok::where('kode_barang', $request->kode_barang)->first();
    
        if (!$stok) {
            return redirect()->back()->with('error', 'Kode barang tidak ditemukan di stok.');
        }
    
        if ($stok->quantity < $request->quantity) {
            return redirect()->back()->with('error', 'Stok tidak cukup untuk barang yang diberikan.');
        }
    
        BarangKeluar::create($request->all());
    
        $stok->quantity -= $request->quantity;
        $stok->save();

        return redirect()->route('barang_keluar.daftar')->with('success', 'Barang keluar berhasil disimpan.');
    }
    
    // Stok
    public function daftarStokBarang() {
        $stok = Stok::all();
        Stok::where('quantity', '<=', 0)->delete();

        return view('stok.daftar', compact('stok'));
    }
}
