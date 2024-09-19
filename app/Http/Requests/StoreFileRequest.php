<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //autorizar o formulário de requerimento
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'user_id' => 'required|integer|min:1',
            'versao' => 'required|integer|min:1',
            'codigo' => 'required|string|min:3|max:255',
            'id_macro' => 'required|integer|min:1',
            'id_setor' => 'required|integer|min:1',
            'id_empresa' => 'required|integer|min:1',
            'file_path' => 'required|string|min:3|max:255',

            //'files.*' => 'required|mimes:pdf, xlsx, ods | max:2048',
        ];
    }
}
