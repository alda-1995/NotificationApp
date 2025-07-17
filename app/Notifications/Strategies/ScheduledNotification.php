<?php
namespace App\Notifications\Strategies;

use App\Interfaces\NotificationTypeInterface;

class ScheduledNotification implements NotificationTypeInterface
{
    public function send(array $recipients, string $message, string $channel): void
    {
        // Aquí solo guardas la notificación para ser procesada luego por un Job o Task Scheduler
        // Notification::create([
        //     'recipients' => json_encode($recipients),
        //     'message' => $message,
        //     'channel' => $channel,
        //     'send_at' => now()->addMinutes(10), // O usa una fecha específica desde el request
        // ]);
    }
}