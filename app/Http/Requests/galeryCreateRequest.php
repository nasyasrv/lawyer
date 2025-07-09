<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class galeryCreateRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
            'image.required' => 'Gambar wajib diunggah.',
            'image.image' => 'Gambar harus berupa file gambar.',
            'image.mimes' => 'Gambar harus berformat jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Gambar tidak boleh lebih dari 2MB.',
        ];
    }
}
