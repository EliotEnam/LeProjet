<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RevueRequest extends FormRequest
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
            'jeu_id'=>'required|numeric',
            'avis'=>'required|min:3|max:255',
            'note'=>'required|numeric|min:0|max:5'
        ];
    }

    public function messages()
    {
        return [
            'avis.min' => 'Ce champ doit être de 3 caractères minimum',
            'avis.max' => 'Ce champ doit être de 255 caractères maximum',
            'note.numeric' => 'La note doit être un chiffre',
            'note.min' => 'La note ne doit pas être en dessous de 0',
            'note.max' => 'La note ne doit pas dépasser 5',
        ];
    }
}
