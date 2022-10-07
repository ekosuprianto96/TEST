<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Penjualan;
use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SalesOrderController extends Controller
{
    public function show()
    {
        $pelanggan = Pelanggan::get();
        $produk = Produk::get();

        return view('salesorder.salesorder', [
            'pelanggan' => $pelanggan,
            'produk' => $produk
        ]);
    }
    public function store(Request $request)
    {
        $pelanggan = Pelanggan::find($request->pelanggan);
        $produk = Produk::find($request->produk);

        Penjualan::create([
            'nama_pelanggan' => $pelanggan->nama,
            'email_pelanggan' => $pelanggan->email,
            'produk' => $produk->nama,
            'harga_produk' => $produk->harga,
            'tanggal_pembelian' => Carbon::now('Asia/Jakarta'),
        ]);

        return redirect()->route('penjualan.show');
    }
}
