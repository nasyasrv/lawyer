<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class legal_patnershipCreateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' => 'required|string|max:255',
            'description' => 'required|string',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'photo.required' => 'Foto wajib diisi.',
            'photo.image' => 'Foto harus berupa gambar.',
            'photo.mimes' => 'Foto harus berformat jpeg, png, jpg, gif, atau svg.',
            'photo.max' => 'Foto tidak boleh lebih dari 2MB.',
            'position.required' => 'Jabatan wajib diisi.',
            'description.required' => 'Deskripsi wajib diisi.',
        ];
    }
}
