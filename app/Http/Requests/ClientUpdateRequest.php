<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientUpdateRequest extends FormRequest
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
                "full_name"=> "required|string|min:3",
                "gender"=> "required|string",
                "age"=> "required|integer|min:1"
        ];
    }

    public function messages()
    {
        return [
            "full_name.required"=> "ism kiritilmadi",
            "full_name.string"=> "ism string bo'lishi kerak",
            "full_name.min:3"=> "ism kamida 3 ta belgidan iborat bo'lishi kerak",
            "gender.required"=> "jins kiritilmadi (erkak/ayol)",
            "gender.string"=> "jins string bo'lishi kerak",
            "age.required"=> "yoshingizni kiriting",
            "age.integer"=> "age raqam ko'rinishi kiritilishi kerak",
            "age.min:1"=> "age kamida 1 ta belgidan iborat bo'lishi kerak "
        ];
    }
}
