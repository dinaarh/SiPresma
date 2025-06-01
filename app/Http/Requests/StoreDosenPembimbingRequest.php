<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreDosenPembimbingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nip' => [
                'required',
                'string',
                'max:20',
                Rule::unique('m_dosen_pembimbing', 'nip')
            ],
            'nama' => [
                'required',
                'string',
                'max:255'
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'nip.required' => 'NIP is required',
            'nip.unique' => 'NIP already exists',
            'nip.max' => 'NIP cannot exceed 20 characters',

            'nama.required' => 'Nama is required',
            'nama.max' => 'Nama cannot exceed 255 characters',

            'user_id.integer' => 'User ID must be an integer',
            'user_id.exists' => 'Selected user does not exist'
        ];
    }
}
