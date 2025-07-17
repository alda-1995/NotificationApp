<?php
namespace App\Factories;

use App\Interfaces\NotificationChannelInterface;
use App\Notifications\Channels\SmsChannel;
use App\Notifications\Channels\WhatsappChannel;

class NotificationChannelFactory
{
    public static function make(string $channel): NotificationChannelInterface
    {
        return match ($channel) {
            'sms' => new SmsChannel(),
            'whatsapp' => new WhatsappChannel(),
            default => throw new \InvalidArgumentException("Canal inválido: $channel"),
        };
    }
}