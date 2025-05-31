<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
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
            'nim' => ['required', 'string', 'min:10', 'max:10', Rule::unique('m_mahasiswa', 'nim')],
            'nama' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('m_user', 'email')],
            'password' => ['required', 'string', 'min:8', 'max:50'],
            'program_studi' => ['required', 'integer', Rule::exists('m_program_studi', 'program_studi_id')],
            'lokasi_preferensi' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'nim.required' => 'NIM wajib diisi.',
            'nim.min' => 'NIM minimal 10 karakter.',
            'nim.max' => 'NIM tidak boleh lebih dari 10 karakter.',
            'nim.unique' => 'NIM sudah terdaftar.',
            'nama.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
            'email.unique' => 'Email sudah terdaftar.',
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi minimal 8 karakter.',
            'password.max' => 'Kata sandi tidak boleh lebih dari 50 karakter.',
            'program_studi.required' => 'Program studi wajib dipilih.',
            'program_studi.exists' => 'Program studi yang dipilih tidak valid.',
            'lokasi_preferensi.required' => 'Lokasi preferensi wajib diisi.',
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
