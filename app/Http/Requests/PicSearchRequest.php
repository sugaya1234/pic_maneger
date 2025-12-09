<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PicSearchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'department' => ['nullable', 'alpha_num', 'max:3'],
            'shop'       => ['nullable', 'alpha_num', 'max:5'],
            'customer'   => ['nullable', 'alpha_num', 'max:5'],
            'pic'        => ['nullable', 'alpha_num', 'max:5'],
        ];
    }
}
