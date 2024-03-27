<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestStoreRequest extends FormRequest
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
            // "name" => "string",
            // "email" => "string|email",
            // "phone" => "integer",
            "prix_action" => "required|integer",
            "nombre_action" => "required|integer",
            "total_payer" => "required|integer", 
        ];
    }
}
