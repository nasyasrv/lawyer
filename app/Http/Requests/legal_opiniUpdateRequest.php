<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class legal_opiniUpdateRequest extends FormRequest
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
            'publisher' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'date_publish' => 'required|date',
            'content' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'Judul harus diisi.',
            'publisher.required' => 'Nama penerbit harus diisi.',
            'author.required' => 'Nama penulis harus diisi.',
            'date_publish.required' => 'Tanggal terbit harus diisi.',
            'content.required' => 'Konten harus diisi.',
            'picture.image' => 'File yang diunggah harus berupa gambar.',
            'picture.mimes' => 'Gambar harus dalam format jpeg, png, jpg, gif, atau svg.',
            'picture.max' => 'Ukuran gambar tidak boleh lebih dari 2MB.',
        ];
    }
}
