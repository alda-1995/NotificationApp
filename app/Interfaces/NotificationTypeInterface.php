<?php
namespace App\Interfaces;

interface NotificationTypeInterface
{
    public function send(array $recipients, string $message, string $channel): void;
}