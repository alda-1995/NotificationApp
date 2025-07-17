<?php

namespace App\Notifications\Channels;

use App\Interfaces\NotificationChannelInterface;
use Twilio\Rest\Client;

class SmsChannel implements NotificationChannelInterface
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
    }

    public function send(string $to, string $message): void
    {
        $this->twilio->messages->create($to, [
            'from' => config('services.twilio.sms_from'),
            'body' => $message,
        ]);
    }
}
