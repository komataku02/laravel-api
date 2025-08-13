<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateContactRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('contact')->id ?? null;

        return [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', "unique:contacts,email,{$id}"],
        ];
    }
}
