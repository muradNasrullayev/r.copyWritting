<?php

namespace App\Http\Requests\WelcomePage;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'background_image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'=>'required|string',
            'content'=>'required|string'
        ];
    }
}
