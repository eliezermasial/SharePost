<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'message' => 'required|string',
           
            'name' => 'required|string|max:225',
            'email' => 'required|email|max:225',
            
            'web_site' => 'nullable|string|max:225',
            'is_active' => 'boolean',
            'article_id' => 'required|exists:articles,id',
        ];
    }
}
