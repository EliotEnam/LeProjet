<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JeuRequest extends FormRequest
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
            'equipe_id'=>'required|numeric',
            'description'=>'required|min:10|max:50000',
            'titre'=>'required|min:3|max:100',
            'cover'=>'image|mimes:png,jpeg,jpg,webp,avif,gif,PNG,JPG,JPEG|max:4096',
            'annee'=>'required|numeric',
            'platforms'=>'required|min:2|max:100',
            'equipe_id'=>'required',
            'tags'=>'required|min:3|max:150',
        ];
    }

    public function messages()
    {
        return [
            'equipe_id.numeric' => 'L\'équipe du joueur doit être un nombre numérique',
            'annee.numeric' => 'L\'année de sortie du jeu doit être un nombre numérique',
            'platforms.min' => 'Le type doit être de 2 caractères au minimum',
            'platforms.max' => 'Le champ type doit ne doit pas dépasser 100 caractères',
            'titre.min' => 'Le titre doit être de 3 caractères au minimum',
            'titre.max' => 'Le type doit ne doit pas dépasser 100 caractères',
            'description.min' => 'La description doit être de 10 caractères au minimum',
            'description.max' => 'La description ne doit pas dépasser 5 000 caractères',
            'tags.min' => 'Le champ tags doit être de 3 caractères au minimum',
            'tags.max' => 'Le champ tags ne doit pas dépasser 150 caractères',
            'cover.mimes'=> 'Le type du ficher n\'est pa reconnu (png,jpeg,jpg,gif).',
            'cover.max'=> 'La taille de l\'image ne peut pas dépasser 4096kb.',
            'cover.image'=> 'La fichier doit etre une image',
           
        ];
    }
}
