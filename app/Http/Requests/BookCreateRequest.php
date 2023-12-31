<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookCreateRequest extends FormRequest
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
            'name' => 'required|alpha',
            'count' => 'required|integer',
            'authorId' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Name cannot be empty.',
            'name.alpha' => 'Name cannot be other than alphabets.',
            'count.required' => 'Count cannot be empty.',
            'count.integer' => 'Count must be a number.',
        ];
    }
}
