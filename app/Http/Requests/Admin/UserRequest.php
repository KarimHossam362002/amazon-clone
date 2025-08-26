<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . ($this->user?->id ?? 'NULL'),
            'password' => $this->isMethod('post') ? 'required|string|min:6' : 'nullable|string|min:6',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'phone_number' => 'nullable|string|max:20',
            'shipping_address' => 'nullable|string',
            'billing_address' => 'nullable|string',
            'is_admin' => 'boolean',
        ];
    }
}
