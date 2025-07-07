<?php

namespace App\Services;

use App\Models\Notification;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;

class NotificationService
{

    public function getAll(): Collection
    {
        return Notification::all();
    }

    public function create(array $data): ?Notification
    {
        try {
            return Notification::create($data);
        } catch (Exception $e) {
            Log::error('Error al crear notificación: ' . $e->getMessage(), [
                'data' => $data,
                'trace' => $e->getTraceAsString(),
            ]);
            return null;
        }
    }
}