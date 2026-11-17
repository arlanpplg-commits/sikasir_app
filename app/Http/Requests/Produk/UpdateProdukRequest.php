<?php

namespace App\Http\Requests\Produk;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProdukRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'kode_produk' => [
                'required',
                Rule::unique('produks', 'kode_produk')
                    ->ignore($this->route('produk')),
            ],
            'nama_produk' => 'required',
            'kategori_id' => 'required|exists:kategoris,id',
            'harga'       => 'required|numeric',
            'stok'        => 'required|numeric',
        ];
    }
}