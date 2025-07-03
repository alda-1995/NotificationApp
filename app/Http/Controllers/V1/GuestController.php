<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuestRequest;
use App\Services\GuestService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class GuestController extends Controller
{
    protected $guestService;

    public function __construct(GuestService $guestService)
    {
        $this->guestService = $guestService;
    }

    public function index()
    {
        $guests = $this->guestService->getAll();
        return view('guests.index', compact('guests'));
    }

    public function create()
    {
        return view('guests.create');
    }

    public function store(GuestRequest $request)
    {
        $data = $request->validated();

        $data['notification_preferences'] = isset($data['notification'])
            ? $data['notification']
            : [];

        unset($data['notification']); // elimina el campo antiguo si existe

        $guest = $this->guestService->create($data);

        if (!$guest) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['general' => 'Ocurrió un error al guardar el invitado. Intenta nuevamente.']);
        }

        return redirect()->route('guests.index')->with('success', 'Invitado creado correctamente.');
    }
}