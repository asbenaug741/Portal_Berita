<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'judul_buku' => 'required',
            // 'genre' => 'required',
            'penulis' => 'required',
            'jenis_buku' => 'required',
            'tahun_terbit' => 'numeric',
            'sampul' => 'required|image|file|max:1024',
            'sinopsis' => 'required',
            'tentang_penulis' => 'required',
            'foto_penulis' => 'required|image|file|max:1024'
        ];
    }
}
