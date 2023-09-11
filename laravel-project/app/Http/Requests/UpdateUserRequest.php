<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'sometimes|string|max:255',
            'email' => 'sometimes|string|email|max:255',
            'bio' => 'sometimes|string',
            'avatar' => 'sometimes|image|max:20480',

        ];
    }
}
