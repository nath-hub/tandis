<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            "names" => "sometimes|required|string", 
            "phone" => 'sometimes|required|string', 
            "password" => "sometimes|required", 
            "towns" => "sometimes|required|string", 
            "type" => "sometimes|required|string", 
            "countrys" => 'sometimes|required|string', 
            "birth_dates" => "sometimes|required|date", 
            'photo'  
        ];
    }
}
