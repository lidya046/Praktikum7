<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function simpan(Request $request)
    {
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function show()
    {
        $nama = Produk::pluck('nama');
        $desc = Produk::pluck('deskripsi');
        $harga = Produk::pluck('harga');

        return view('list_produk', compact('nama', 'desc', 'harga'));
    }
}
