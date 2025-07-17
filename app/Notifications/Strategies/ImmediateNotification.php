<?php
namespace App\Notifications\Strategies;

use App\Factories\NotificationChannelFactory;
use App\Interfaces\NotificationTypeInterface;

class ImmediateNotification implements NotificationTypeInterface
{
    public function send(array $recipients, string $message, string $channel): void
    {
        $sender = NotificationChannelFactory::make($channel);

        foreach ($recipients as $recipient) {
            $sender->send($recipient, $message);
        }
    }
}