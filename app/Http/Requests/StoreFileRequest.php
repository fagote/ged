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
            'id_empresa1' => 'nullable|integer|min:1',
            'id_empresa2' => 'nullable|integer|min:1',
            'id_empresa3' => 'nullable|integer|min:1',
            'id_empresa4' => 'nullable|integer|min:1',
            'id_setor1' => 'nullable|integer|min:1',
            'id_setor2' => 'nullable|integer|min:1',
            'id_setor3' => 'nullable|integer|min:1',
            'id_setor4' => 'nullable|integer|min:1',
            'id_setor5' => 'nullable|integer|min:1',
            'id_setor6' => 'nullable|integer|min:1',
            'id_setor7' => 'nullable|integer|min:1',
            'id_setor8' => 'nullable|integer|min:1',
            'id_setor9' => 'nullable|integer|min:1',
            'id_setor10' => 'nullable|integer|min:1',
            'id_setor11' => 'nullable|integer|min:1',
            'id_setor12' => 'nullable|integer|min:1',
            'id_setor13' => 'nullable|integer|min:1',
            'id_setor14' => 'nullable|integer|min:1',
            'id_setor15' => 'nullable|integer|min:1',
            'id_setor16' => 'nullable|integer|min:1',
            'id_setor17' => 'nullable|integer|min:1',
            'id_setor18' => 'nullable|integer|min:1',
            'id_setor19' => 'nullable|integer|min:1',
            'id_setor20' => 'nullable|integer|min:1',
            'id_setor21' => 'nullable|integer|min:1',
            'id_setor22' => 'nullable|integer|min:1',
            'id_setor23' => 'nullable|integer|min:1',
            'id_setor24' => 'nullable|integer|min:1',
            'id_setor25' => 'nullable|integer|min:1',
            'id_setor26' => 'nullable|integer|min:1',
            'id_setor27' => 'nullable|integer|min:1',
            'id_setor28' => 'nullable|integer|min:1',
            'id_setor29' => 'nullable|integer|min:1',
            'id_setor30' => 'nullable|integer|min:1',
            'id_setor31' => 'nullable|integer|min:1',
            'id_setor32' => 'nullable|integer|min:1',
            'id_setor33' => 'nullable|integer|min:1',
            'id_setor34' => 'nullable|integer|min:1',
            'id_setor35' => 'nullable|integer|min:1',
            'id_setor36' => 'nullable|integer|min:1',
            'id_setor37' => 'nullable|integer|min:1',
            'id_setor38' => 'nullable|integer|min:1',
            'file_path' => 'required|file|max:10240',
            'motivoReprovacao' => 'nullable|string|min:3|max:255',

        ];
    }
}
