<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "firstname" => "required|string",
            "lastname" => "required|string",
            "email" => "email",
            "phone" => "required|string",
            "whatsapp" => "string",
            "description" => "string",
            "issue" => "string",
            "dob" => "required|date",
//            "gender" => "enum:male,female, other",
        ];
    }
}