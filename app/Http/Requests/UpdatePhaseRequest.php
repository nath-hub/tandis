<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePhaseRequest extends FormRequest
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
            'phase' => "sometimes|required|string",
            'date_debut' => "sometimes|required|date",
            'date_fin' => "sometimes|required|date",
            'prix_phase' => "sometimes|required|integer",
            'statut_phase' => "sometimes|required|string",
        ];
    }
}
