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
            'type' => 'required|in:info,alerta,recordatorio',
            'channel' => 'required|in:SMS,WhatsApp,Email',
            'message' => 'required|string',
            'send_at' => 'nullable',
            'group_id' => 'nullable|exists:groups,group_id',
            'template_id' => 'nullable|exists:templates,template_id',
        ];
    }
}
