<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormEditSubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'image_path' => 'image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required',
            'group' => 'required',
        ];
    }
}
