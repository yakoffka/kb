<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageContactFormRequest extends FormRequest
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
            'name' => 'required|string|max:256',
            'email' => 'required|string|max:256',
            'subject' => 'required|string|max:256',
            'message' => 'required|string|max:256',
        ];
    }
}
