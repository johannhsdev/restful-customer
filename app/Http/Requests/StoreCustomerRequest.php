<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'dni' => 'required|unique:customers',
            'id_reg' => 'required|exists:regions,id',
            'id_com' => 'required|exists:communes,id',
            'email' => 'required|email|unique:customers',
            'name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'nullable|string',
            'date_reg' => 'required|date',
        ];
    }
}
