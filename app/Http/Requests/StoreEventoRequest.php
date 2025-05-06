<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventoRequest extends FormRequest
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
            'nom_evento' => 'required|max:50',
            'lugar' => 'required|max:50',
            'fech_aperturra' => 'required|date',
            'fech_cierre' => 'required|date',
            'anio' => 'required|max:4',
        ];
    }
}
