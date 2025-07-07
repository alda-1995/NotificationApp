<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class TwilioService
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(
            config('services.twilio.sid'),
            config('services.twilio.token')
        );
    }

    public function sendSms($to, $message): bool
    {
        try {
            $this->twilio->messages->create($to, [
                'from' => config('services.twilio.sms_from'),
                'body' => $message,
            ]);
            return true;
        } catch (TwilioException $e) {
            Log::error("Error enviando SMS a {$to}: " . $e->getMessage(), [
                'exception' => $e,
            ]);
            return false;
        } catch (\Exception $e) {
            Log::error("Error inesperado enviando SMS a {$to}: " . $e->getMessage(), [
                'exception' => $e,
            ]);
            return false;
        }
    }

    public function sendWhatsapp($to, $message): bool
    {
        try {
            $this->twilio->messages->create("whatsapp:$to", [
                'from' => config('services.twilio.whatsapp_from'),
                'body' => $message,
            ]);
            return true;
        } catch (TwilioException $e) {
            Log::error("Error enviando WhatsApp a {$to}: " . $e->getMessage(), [
                'exception' => $e,
            ]);
            return false;
        } catch (\Exception $e) {
            Log::error("Error inesperado enviando WhatsApp a {$to}: " . $e->getMessage(), [
                'exception' => $e,
            ]);
            return false;
        }
    }
}