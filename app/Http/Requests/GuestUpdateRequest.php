<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone_number' => ['nullable', 'string', 'max:20'],
            'notification' => ['nullable', 'array'],
            'notification.*' => ['in:sms,whatsapp,email'],
        ];
    }
}
