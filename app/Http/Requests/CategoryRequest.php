<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'slug' => ['required', 'string', 'unique:categories'],
            'parent_id' => ['nullable', 'integer', 'exists:categories,id'],
            'status' => ['boolean'],
            'updated_at' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
