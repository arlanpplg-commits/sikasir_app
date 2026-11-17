<?php

namespace App\Repositories;

use App\Models\Produk;
use App\Contracts\ProdukRepositoryInterface;

class ProdukRepository implements ProdukRepositoryInterface
{
    public function getAll()
    {
        return Produk::with('kategori')->get();
    }
    public function getById($id)
    {
        return Produk::with('kategori')->find($id);
    }
    public function create(array $data)
    {
        return Produk::create($data);
    }
    public function update ($id, array $data)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return false;
        }
        return $produk->update($data);
    }
    public function delete($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return false;
        }

        return $produk->delete();
    }
}
