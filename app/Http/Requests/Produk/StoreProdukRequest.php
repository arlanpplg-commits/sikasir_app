<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdukRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode_produk' => 'required|unique:produks,kode_produk',
            'nama_produk' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga'       => 'required|numeric',
            'stok'        => 'required|numeric',
        ];
    }
}