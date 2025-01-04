<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'location' => 'required|string|max:50',
            'related' => 'required|string|max:50',
            'f_name' => 'required|string|max:50',
            'email' => ['required', 'email', 'max:191', 'email:dns'], 
        ];
    }

    public function messages(): array
    {
        return [
            'email.dns' => 'The :attribute must be a valid email address with a valid DNS record.',
        ];
    }
}
