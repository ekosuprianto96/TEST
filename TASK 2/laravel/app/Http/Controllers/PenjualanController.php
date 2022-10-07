<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function show()
    {
        $penjualan = Penjualan::latest()->get();

        return view('pesanan.pesanan', compact('penjualan'));
    }
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);

        $penjualan->delete();

        return redirect()->back();
    }
}
