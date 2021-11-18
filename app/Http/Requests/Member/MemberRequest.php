<?php

namespace App\Http\Requests\Member;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required|string|max:100',
            'nim' => 'required|digits:9|unique:members,nim,' . optional($this->member)->id,
            'jenis_kelamin_id' => 'required|string',
            'kelas_id' => 'required|string',
            'tempat_tanggal_lahir' => 'required|string|max:100',
            'alamat' => 'required|string|max:100',
            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png',
        ];
    }
}
