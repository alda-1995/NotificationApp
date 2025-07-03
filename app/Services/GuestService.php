<?php

namespace App\Services;

use App\Models\Guest;
use Illuminate\Support\Collection;

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

    public function create(array $data): Guest
    {
        return Guest::create($data);
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