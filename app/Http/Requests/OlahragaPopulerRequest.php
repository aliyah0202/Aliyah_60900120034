<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OlahragaPopulerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'nama_olahraga' => 'required',
            'desk_singkat' => 'required',
            
        ];
    }

    public function messages()
    {
        return[
            'nama_olahraga.required' => 'Nama Olahraga tidak boleh kosong',
            'desk_singkat.required' => 'Deskripsi tidak boleh kosong',
            
            
        ];
    }
}
