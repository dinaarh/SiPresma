<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class BidangKeahlianStoreRequest extends FormRequest
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
            'bidang_keahlian_nama' => [
                'required',
                'string',
                'max:255',
                Rule::unique('m_bidang_keahlian', 'bidang_keahlian_nama'),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'bidang_keahlian_nama.required' => 'Nama bidang keahlian wajib diisi.',
            'bidang_keahlian_nama.unique' => 'Nama bidang keahlian sudah digunakan.',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'status' => false,
            'message' => 'Validasi gagal.',
            'msgField' => $validator->errors()
        ]));
    }
}
