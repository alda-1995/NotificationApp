<?php
namespace App\Factories;

use App\Interfaces\NotificationTypeInterface;
use App\Notifications\Strategies\ImmediateNotification;
use App\Notifications\Strategies\ScheduledNotification;

class NotificationTypeFactory
{
    public static function make(string $type): NotificationTypeInterface
    {
        return match ($type) {
            'immediate' => new ImmediateNotification(),
            'scheduled' => new ScheduledNotification(),
            default => throw new \InvalidArgumentException("Tipo de notificación inválido: $type"),
        };
    }
}