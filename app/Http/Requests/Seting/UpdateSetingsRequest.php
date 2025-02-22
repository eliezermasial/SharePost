<?php

namespace App\Http\Requests\Seting;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSetingsRequest extends FormRequest
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
            'web_site_name' => 'required|string',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'address' => 'string|nullable',
            'phone' => 'string|nullable',
            'email' => 'string|nullable',
            'about' => 'required',
        ];
    }
}
