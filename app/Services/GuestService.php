<?php

namespace App\Services;

use App\Models\Guest;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class GuestService
{
    public function getAll(): Collection
    {
        return Guest::all();
    }

    public function find(int $id): ?Guest
    {
        return Guest::find($id);
    }

    public function create(array $data): ?Guest
    {
        try {
            return Guest::create($data);
        } catch (Exception $e) {
            Log::error('Error al crear invitado: ' . $e->getMessage(), [
                'data' => $data,
                'trace' => $e->getTraceAsString(),
            ]);
            return null;
        }
    }

    public function update(int $id, array $data): ?Guest
    {
        $guest = Guest::find($id);
        if ($guest) {
            $guest->update($data);
        }

        return $guest;
    }

    public function delete(int $id): bool
    {
        $guest = Guest::find($id);
        return $guest ? $guest->delete() : false;
    }
}