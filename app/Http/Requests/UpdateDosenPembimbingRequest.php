<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class UpdateDosenPembimbingRequest extends FormRequest
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
        $nip = $this->route('dosen-pembimbing') ?? $this->route('nip');

        return [
            'nip' => [
                'sometimes',
                'required',
                'string',
                'max:20',
                Rule::unique('m_dosen_pembimbing', 'nip')->ignore($nip)
            ],
            'nama' => [
                'sometimes',
                'required',
                'string',
                'max:255'
            ],
            'user_id' => [
                'sometimes',
                'nullable',
                'integer',
                'exists:m_users,user_id'
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
            'user_id.exists' => 'Selected user does not exist'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if (empty($this->all())) {
                $validator->errors()->add('request', 'At least one field must be provided.');
            }
        });
    }
}
