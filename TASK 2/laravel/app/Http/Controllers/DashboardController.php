<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $produk = Produk::latest()->get();
        return view('dashboard', compact('produk'));
    }
}
