<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnterpriseUpdateRequest extends FormRequest
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
            'sirens' => "sometimes|required|string",
            'commercial_registers' => "sometimes|required|string",
            'name_enterprises' => "sometimes|required|string",
            'addres' => "sometimes|required|string",
            'phases' => "sometimes|required|string",
            'livress' => "sometimes|required|mimes:pdf,zip",
            'politiques' => "sometimes|required|mimes:pdf,zip",
            'date_debuts' => "sometimes|required|date",
            'date_fins' => "sometimes|required|date",
            'prix_phases' => "sometimes|required|integer",
            'statut_phases' => "sometimes|required|string",
            'objectifs' => "sometimes|required|integer",
            'montant_actuels' => "sometimes|required|integer",
            'web_sites' => "sometimes|required|string",
            'descriptions' => "sometimes|required|string",
        ];
    }
}
