<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Services\GroupService;
use App\Services\GuestService;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    protected $groupService;
    protected $guestService;

    public function __construct(GroupService $groupService, GuestService $guestService)
    {
        $this->groupService = $groupService;
        $this->guestService = $guestService;
    }

    public function index()
    {
        $groups = $this->groupService->getAll();
        return view('groups.index', compact('groups'));
    }

    public function create()
    {
        $guests = $this->guestService->getAll();
        return view('groups.create', compact('guests'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'guest_ids' => 'nullable|array',
            'guest_ids.*' => 'exists:guests,guest_id',
        ]);

        $group = $this->groupService->create($validated);

        return redirect()->route('groups.index')->with('success', 'Grupo creado correctamente');
    }
}