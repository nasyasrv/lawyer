<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class jurnalUpdateRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'pdf_file' => 'nullable|file|mimes:pdf|max:2048',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
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
            'title.required' => 'Judul wajib diisi.',
            'title.unique' => 'Judul sudah ada, silakan gunakan judul lain.',
            'pdf_file.file' => 'File harus berupa file.',
            'pdf_file.mimes' => 'File harus berformat PDF.',
            'pdf_file.max' => 'File PDF tidak boleh lebih dari 2MB.',
            'thumbnail.image' => 'Sampul harus berupa gambar.',
            'thumbnail.mimes' => 'Sampul harus berformat jpeg, png, jpg, gif, atau svg.',
            'thumbnail.max' => 'Sampul tidak boleh lebih dari 2MB.',
            'description.string' => 'Deskripsi harus berupa teks.',
        ];
    }
}
