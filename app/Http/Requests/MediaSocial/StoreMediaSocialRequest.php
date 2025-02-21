<?php

namespace App\Http\Requests\MediaSocial;

use Illuminate\Foundation\Http\FormRequest;

class StoreMediaSocialRequest extends FormRequest
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
            'name' => ['required','string'],
            'lien' => ['required', 'string'],
            'icon' => ['required', 'string'],
        ];
    }
}
