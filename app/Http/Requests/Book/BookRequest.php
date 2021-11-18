<?php

namespace App\Http\Requests\Book;

use App\Models\buku;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'judul' => 'required|string|max:255',
            'pengarang' => 'required|string|max:200',
            'tahun_penerbit' => 'required|digits:4',
            'penerbit' => 'required|string|max:200',
            'ISBN' => 'required|numeric',
            'category_id' => 'required|max:100',
            'jumlah_buku' => 'required|numeric',
            'lokasi' => 'required|string|max:255',
            'asal_buku' => 'required:255',
            'jumlah_buku_per_rak' => 'required|numeric',
            // 'tanggal_input' => 'required',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }
}
