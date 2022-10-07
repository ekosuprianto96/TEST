<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show()
    {
        return view('produk.addproduk');
    }
    public function store(Request $request)
    {
        Produk::create([
            'nama' => $request->nama,
            'harga' => $request->harga
        ]);

        return redirect()->route('dashboard');
    }
    public function showEdit($id)
    {
        $produk = Produk::find($id);

        return view('produk.edit', compact('produk'));
    }
    public function destroy($id)
    {
        $produk = Produk::find($id)->delete();

        return redirect()->back();
    }
    public function edit(Request $request, $id)
    {
        $produk = Produk::find($id);
        $produk->nama = $request->nama;
        $produk->harga = $request->harga;
        $produk->save();

        return redirect()->route('dashboard');
    }
}
