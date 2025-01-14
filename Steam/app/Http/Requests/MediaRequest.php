<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
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
            'im2'=>'image|mimes:png,jpeg,jpg,webp,avif,gif,PNG,JPG,JPEG|max:4096',
            'im3'=>'image|mimes:png,jpeg,jpg,webp,avif,gif,PNG,JPG,JPEG|max:4096',
        ];
    }

    public function messages()
    {
        return [
          
        ];
    }
}
