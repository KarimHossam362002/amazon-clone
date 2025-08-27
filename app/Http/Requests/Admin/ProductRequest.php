<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            "name" => ['required', 'string'],
            "description" => ['required', 'string'],
            "price" => ['required', 'numeric'],
            "discount" => ['required', 'numeric','between:0,100'],
            "price_after_discount" => ['sometimes', 'numeric'],
            "stock_quantity" => ['required', 'numeric'],
            "brand" => ['required', 'string'],
            "rating_avg" => ['nullable', 'numeric','between:1,5'],
            "image" => ["mimes:png,jpg,jpeg,gif,webp"],
            'category_id' => ["required","exists:categories,id"],
        ];
    }
}
