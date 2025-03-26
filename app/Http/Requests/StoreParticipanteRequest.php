<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParticipanteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'dni' => 'required|max:8',
            'nombres' => 'required|max:15',
            'apellido_paterno' => 'required|max:100',
            'apellido_materno' => 'required|max:100',
            'f_nacimiento' => 'required|date',
            'l_nacimiento' => 'required|max:50',
            'profesion' => 'required|max:50',
            'l_residencia' => 'required|max:50',
            'organizacion' => 'required|max:50',
            'celular' => 'required|max:50',
            'id_comision' => 'required|max:50',
        ];
    }
}
