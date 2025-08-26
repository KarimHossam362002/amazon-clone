<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'shipping_address' => 'nullable|string',
            'total_amount' => 'required|numeric|min:0',
            'payment_status' => 'required|in:Pending,Completed,Failed,Refunded',
            'shipping_status' => 'required|in:Pending,Shipped,Delivered,Returned',
        ];
    }
}
