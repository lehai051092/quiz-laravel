<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class FormAddSubmitRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
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
            'email' => 'required|email|unique:ql_users',
            'password' => 'required|between:8,24',
            'confirm_password' => 'same:password',
            'image_path' => 'image|mimes:jpeg,jpg,png|max:2048',
            'status' => 'required',
            'group' => 'required',
        ];
    }
}
