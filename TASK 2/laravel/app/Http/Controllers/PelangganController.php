<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function show()
    {
        $pelanggan = Pelanggan::latest()->get();
        return view('pelanggan.pelanggan', compact('pelanggan'));
    }
    public function add()
    {
        return view('pelanggan.addpelanggan');
    }
    public function store(Request $request)
    {
        Pelanggan::create([
            'nama' => request('nama'),
            'email' => request('email')
        ]);

        return redirect()->route('pelanggan.show');
    }
    public function destroy($id)
    {
        $pelanggan = Pelanggan::find($id);
        $pelanggan->delete();

        return redirect()->back();
    }
    public function showEdit($id)
    {
        $pelanggan = Pelanggan::find($id);

        return view('pelanggan.edit', compact('pelanggan'));
    }
    public function edit(Request $request, $id)
    {
        $pelanggan = Pelanggan::find($id);

        $pelanggan->nama = $request->nama;
        $pelanggan->email = $request->email;
        $pelanggan->save();

        return redirect()->route('pelanggan.show');
    }
}
