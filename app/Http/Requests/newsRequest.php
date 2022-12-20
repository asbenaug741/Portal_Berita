<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newsRequest extends FormRequest
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
            'judul_berita' => 'required|max:100',
            'sampul' =>'required|image|file|max:1024',
            'isi_berita' => 'required',
            'last_update' => 'required'
        ];
    }
}
