<?php

namespace App\Http\Controllers\V1;

use App\Factories\NotificationTypeFactory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNotificationRequest;
use App\Services\GroupService;
use App\Services\NotificationService;
use App\Services\TwilioService;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    protected $groupService;
    protected $notificationService;
    protected $twilioService;

    public function __construct(GroupService $groupService, NotificationService $notificationService, TwilioService $twilioService)
    {
        $this->groupService = $groupService;
        $this->notificationService = $notificationService;
        $this->twilioService = $twilioService;
    }

    public function index()
    {
        $notifications = $this->notificationService->getAll();
        return view('notifications.index', compact('notifications'));
    }

    public function create()
    {
        $groups = $this->groupService->getAll();
        return view('notifications.create', compact('groups'));
    }

    public function store(StoreNotificationRequest $request)
    {
        $group_id = $request->input('group_id');
        $recipients = $this->groupService->getRecipientsFromGroup($group_id);

        $message = $request->input('message');
        $channel = $request->input('channel');
        $type = $request->input('type');
        
        try {
            $notificationType = NotificationTypeFactory::make($type);
            $notificationType->send($recipients, $message, $channel);
        } catch (\InvalidArgumentException $e) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Ocurrió un error al enviar las notificaciones.']);
        }

        return redirect()->route('notifications.index')
            ->with('success', 'Notificación enviada correctamente a todos los destinatarios.');
        // dd($request->validated());
        // $notification = $this->notificationService->create($request->validated());

        // if (!$notification) {
        //     return redirect()->back()
        //         ->withInput()
        //         ->withErrors(['general' => 'Ocurrió un error al guardar la notificación. Intenta nuevamente.']);
        // }

        // $recipients = $this->groupService->getRecipientsFromGroup($notification->group_id);
        // $failedRecipients = [];

        // foreach ($recipients as $guest) {

        //     switch ($notification->channel) {
        //         case 'SMS':
        //             $success = $this->twilioService->sendSms($guest->phone_number, $notification->message);
        //             if (!$success) {
        //                 $failedRecipients[] = $guest->phone_number;
        //             }
        //             break;
        //         case 'WhatsApp':
        //             $success = $this->twilioService->sendWhatsapp($guest->phone_number, $notification->message);
        //             if (!$success) {
        //                 $failedRecipients[] = $guest->phone_number;
        //             }
        //             break;
        //     }
        // }

        // if (!empty($failedRecipients)) {
        //     return redirect()->back()
        //         ->withInput()
        //         ->withErrors(['general' => 'Notificación guardada, pero no se pudo enviar a algunos destinatarios: ' . implode(', ', $failedRecipients)]);
        //     // return redirect()->route('notifications.index')
        //     //     ->with('warning', 'Notificación guardada, pero no se pudo enviar a algunos destinatarios: ' . implode(', ', $failedRecipients));
        // }

        // return redirect()->route('notifications.index')
        //     ->with('success', 'Notificación enviada correctamente a todos los destinatarios.');
    }
}