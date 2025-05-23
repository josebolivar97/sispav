<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistroRequest extends FormRequest
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
            'institucion' => 'required|max:100',
            'nom_reconocimiento' => 'required|max:75',
            'pdf_reconocimiento' => 'nullable|file|mimes:pdf|max:102500',
            'id_evento' => 'required|max:100',
        ];
    }
}
