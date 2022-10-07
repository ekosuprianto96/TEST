<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Pelanggan::create([
            'nama' => 'Adi Saputra',
            'email' => 'adisaputra23@gmail.com'
        ]);
        Produk::create([
            'nama' => 'Ember Plastik',
            'harga' => 10000
        ]);
        Produk::create([
            'nama' => 'Sapu Lidi',
            'harga' => 5000
        ]);
    }
}
