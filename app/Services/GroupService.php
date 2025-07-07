<?php

namespace App\Services;

use App\Models\Group;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class GroupService
{
    public function getAll(): Collection
    {
        return Group::withCount('guests')->latest()->get();
    }

    public function find(int $id): ?Group
    {
        return Group::find($id);
    }

    public function getRecipientsFromGroup(int $groupId)
    {
        $group = Group::with('guests')->findOrFail($groupId);
        return $group->guests;
    }

    public function create(array $data): ?Group
    {
        try {
            $guests = $data['guest_ids'] ?? [];

            unset($data['guest_ids']); // quita para evitar error en fillable
            $group = Group::create($data);

            if (!empty($guests)) {
                $group->guests()->attach($guests);
            }

            return $group;
        } catch (Exception $e) {
            Log::error('Error al crear el grupo: ' . $e->getMessage(), [
                'data' => $data,
                'trace' => $e->getTraceAsString(),
            ]);
            return null;
        }
    }


    public function update(int $id, array $data): ?Group
    {
        $group = Group::find($id);
        if ($group) {
            $group->update($data);
        }

        return $group;
    }

    public function delete(int $id): bool
    {
        $group = Group::find($id);
        return $group ? $group->delete() : false;
    }
}