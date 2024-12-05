<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CilentUpdateRequest extends FormRequest
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
            'workplace' => 'required|string|min:3|max:255',
            'client_salary' => 'required|integer',
            'age' => 'required|integer|between:1,100',

        ];
    }
    public function messages(){
        return [
            'workplace.required' => 'Mijoz ish joyini nomini kiriting',
            'workplace.min' => 'Mijoz ish joyini nomi  kamida 3 ta belgidan iborat bolsin',
            'workplace.max' => 'Mijoz ish joyini nomi 255 ta belgidan oshmasin',
            'client_salary.required' => 'Mijoz ish xaqqini kiriting',
            'client_salary.integer' => 'Mijoz ish xaqqini son bilan kiriting',
            'age.required' => 'Mijoz yoshini kiriting',
            'age.integer' => 'Mijoz yoshini son bilan kiriting',
            'age.between' => 'Mijoz yoshi 1 dan 100 gacha bo;gan sonlarni qabul qiladi',
        ];
    }
}
