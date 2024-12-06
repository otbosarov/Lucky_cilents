<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CilentCreateRequest extends FormRequest
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
            'client_name' => 'required|string|min:3|max:255',
            'workplace' => 'required|string|min:3|max:255',
            'client_salary' => 'required|integer',
            'age' => 'required|integer|between:1,100',
            "gender" => 'required|string'
        ];
    }
    public function messages(){
        return [
            'client_name.required' => 'Mijoz ismini kiriting',
            'client_name.min' => 'Mijoz ismi kamida 3 ta belgidan iborat bolsin ',
            'client_name.max' => 'Mijoz ismi 255 ta belgidan oshmasin',
            'workplace.required' => 'Mijoz ish joyini nomini kiriting',
            'workplace.min' => 'Mijoz ish joyini nomi  kamida 3 ta belgidan iborat bolsin',
            'workplace.max' => 'Mijoz ish joyini nomi 255 ta belgidan oshmasin',
            'client_salary.required' => 'Mijoz ish xaqqini kiriting',
            'client_salary.integer' => 'Mijoz ish xaqqini son bilan kiriting',
            'age.required' => 'Mijoz yoshini kiriting',
            'age.integer' => 'Mijoz yoshini son bilan kiriting',
            'age.between' => 'Mijoz yoshi 1 dan 100 gacha bo;gan sonlarni qabul qiladi',
            'gender.required' => 'Mijoz jinsini kiritng',


        ];
    }

}
