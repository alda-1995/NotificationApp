<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\GuestService;
use Illuminate\Http\Request;

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
}
