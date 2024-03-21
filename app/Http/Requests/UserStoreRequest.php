<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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

        $routeName = $this->route()->getName();

        if ($routeName === 'users.store') {
            return [
                "name" => "required|string",
                "email" => 'required|email',
                "phone" => 'required|string',
                "type" ,
                "password" => "required",
                "photo",
                "web_site",
                "user_id",
                "name_enterprise" => $this->est_admin ? "required": 'nullable',
                "address" => $this->est_admin ? "required": 'nullable'
            ];
        }
        return [

            "email" => 'required|email',
            "password" => "required"
        ];
    }
}
