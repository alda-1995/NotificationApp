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

        $this->groupService->create($validated);

        return redirect()->route('groups.index')->with('success', 'Grupo creado correctamente');
    }

    public function show($id)
    {
        $group = $this->groupService->find($id);
        $members = $this->groupService->getRecipientsFromGroup($id);
        return view('groups.show', compact('group', 'members'));
    }

    public function edit($id)
    {
        $group = $this->groupService->find($id);
        $guests = $this->guestService->getAll();
        $selectedGuestIds = $group->guests->pluck('guest_id')->toArray();

        return view('groups.edit', compact('group', 'guests', 'selectedGuestIds'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'guest_ids' => 'nullable|array',
            'guest_ids.*' => 'exists:guests,guest_id',
        ]);
        
        $updatedGroup = $this->groupService->update($id, $validated);

        if ($updatedGroup) {
            return redirect()
                ->route('groups.index')
                ->with('success', 'Grupo actualizado correctamente.');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('general', 'Ocurrió un error al actualizar el grupo.');
    }

    public function destroy($id)
    {
        $deleted = $this->groupService->delete($id);
        if ($deleted) {
            return redirect()->route('groups.index')->with('success', 'Grupo eliminado correctamente.');
        }
        return redirect()->route('groups.index')->with('error', 'No se pudo eliminar el grupo.');
    }
}