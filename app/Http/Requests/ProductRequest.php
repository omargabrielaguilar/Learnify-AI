<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['nullable'],
            'description' => ['nullable'],
            'price' => ['required', 'numeric'],
            'stock' => ['required', 'integer'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'status' => ['boolean'],
            'updated_at' => ['required', 'date'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
