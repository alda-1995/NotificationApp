<?php
namespace App\Interfaces;

interface NotificationChannelInterface
{
    public function send(string $to, string $message): void;
}