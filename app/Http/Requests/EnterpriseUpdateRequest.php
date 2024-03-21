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
            'siren' => "sometimes|required|string",
            'commercial_register' => "sometimes|required|string",
            'name_enterprise' => "sometimes|required|string",
            'address' => "sometimes|required|string",
            'phase' => "sometimes|required|string",
            'livres' => "sometimes|required|mimes:pdf,zip",
            'politique' => "sometimes|required|mimes:pdf,zip",
            'date_debut' => "sometimes|required|date",
            'date_fin' => "sometimes|required|date",
            'prix_phase' => "sometimes|required|integer",
            'statut_phase' => "sometimes|required|string",
            'objectif' => "sometimes|required|integer",
            'montant_actuel' => "sometimes|required|integer",
            'web_site' => "sometimes|required|string",
            'description' => "sometimes|required|string",
        ];
    }
}
