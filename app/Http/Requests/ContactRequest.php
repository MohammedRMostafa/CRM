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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:10',
            'company' => 'nullable|string|max:255',
            'job' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
        ];
    }

    // public function messages(): array
    // {
    //     return [
    //         'required' => ':attribute Important!',
    //         'name.required' => 'The Name is required!',
    //         'cover_image.dimensions' => 'Image dimensions must be 444 x 111',
    //     ];
    // }
}
