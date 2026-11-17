<?php

namespace App\Http\Controllers\Api;

use App\Services\ProdukService;
use App\Http\Requests\Produk\StoreProdukRequest;
use App\Http\Requests\Produk\UpdateProdukRequest;

class ProdukController extends BaseApiController
{
    protected $produkService;

    public function __construct(ProdukService $produkService)
    {
        $this->produkService = $produkService;
    }

    // GET: Menampilkan semua produk
    public function index()
    {
        $produks = $this->produkService->getAll();

        return $this->successResponse(
            'List Data Produk SIKASIR',
            $produks
        );
    }

    // GET: Menampilkan detail produk
    public function show($id)
    {
        $produk = $this->produkService->getById($id);

        if (!$produk) {
            return $this->errorResponse(
                'Produk Tidak Ditemukan',
                404
            );
        }

        return $this->successResponse(
            'Detail Produk SIKASIR',
            $produk
        );
    }

    // POST: Menambahkan produk
    public function store(StoreProdukRequest $request)
    {
        $produk = $this->produkService->create(
            $request->validated()
        );

        return $this->successResponse(
            'Produk Berhasil Ditambahkan',
            $produk,
            201
        );
    }

    // PUT: Memperbarui produk
    public function update(UpdateProdukRequest $request, $id)
    {
        $updated = $this->produkService->update(
            $id,
            $request->validated()
        );

        if (!$updated) {
            return $this->errorResponse(
                'Produk Tidak Ditemukan',
                404
            );
        }

        return $this->successResponse(
            'Produk Berhasil Diperbarui'
        );
    }

    // DELETE: Menghapus produk
    public function destroy($id)
    {
        $deleted = $this->produkService->delete($id);

        if (!$deleted) {
            return $this->errorResponse(
                'Produk Tidak Ditemukan',
                404
            );
        }

        return $this->successResponse(
            'Produk Berhasil Dihapus'
        );
    }
}
