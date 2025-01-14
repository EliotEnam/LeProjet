<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsagerRequest extends FormRequest
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
            'matricule'=>'required|numeric',
            'password'=>'min:3',
            'nom'=>'required|min:3',
            'prenom'=>'required|min:3',
            'courriel'=>'required|min:3',
            'statut'=>'required|min:3',

        ];
    }

    public function messages()
    {
        return [
            'matricule.required' => 'Le champ matricule est obligatoire.',
            'matricule.numeric' => 'Le champ matricule doit être un nombre.',
            'password.min' => 'Le mot de passe doit contenir au moins 3 caractères.',           
            'nom.required' => 'Le champ nom est obligatoire.',
            'nom.min' => 'Le nom doit contenir au moins :min caractères.',           
            'prenom.required' => 'Le champ prénom est obligatoire.',
            'prenom.min' => 'Le prénom doit contenir au moins 3 caractères.',            
            'courriel.required' => 'Le champ courriel est obligatoire.',
            'courriel.min' => 'Le courriel doit contenir au moins :3 caractères.',           
            'statut.required' => 'Le champ statut est obligatoire.',
            'statut.min' => 'Le statut doit contenir au moins :3 caractères.',
        ];
        
    }
}
