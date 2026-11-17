<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;
use App\Models\Produk;

class SikasirSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Buat Data Kategori
        $katMakanan = Kategori::create([
            'nama_kategori' => 'Makanan',
            'deskripsi' => 'Aneka makanan ringan dan berat'
        ]);

        $katMinuman = Kategori::create([
            'nama_kategori' => 'Minuman',
            'deskripsi' => 'Aneka minuman segar'
        ]);

        // 2. Buat Data Produk yang Berelasi dengan Kategori
        Produk::create([
            'kode_produk' => 'P001',
            'nama_produk' => 'Nasi Goreng Spesial',
            'kategori_id' => $katMakanan->id,
            'harga' => 15000,
            'stok' => 25,
            'deskripsi' => 'Nasi goreng dengan telur dan suwiran ayam'
        ]);

        Produk::create([
            'kode_produk' => 'P002',
            'nama_produk' => 'Es Teh Manis',
            'kategori_id' => $katMinuman->id,
            'harga' => 5000,
            'stok' => 50,
            'deskripsi' => 'Teh manis segar dengan es batu'
        ]);
    }
}