<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotificationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'type' => 'required|in:immediate,scheduled',
            'channel' => 'required|in:sms,whatsapp',
            'message' => 'required|string',
            'send_at' => 'nullable',
            'group_id' => 'nullable|exists:groups,group_id',
            'template_id' => 'nullable|exists:templates,template_id',
        ];
    }
}
