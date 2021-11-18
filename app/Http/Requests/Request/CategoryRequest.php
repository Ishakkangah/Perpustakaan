<?php

namespace App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama_category' => 'required|string|max:200|unique:categories,nama_category',
            'deskripsi' => 'required|Present|string|unique:categories,deskripsi',
        ];
    }
}
