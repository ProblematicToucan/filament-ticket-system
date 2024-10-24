<?php

namespace App\Traits;

trait HasPermission
{
    public function hasPermission(string $permission): bool
    {
        return $this->roles
            ->flatMap(fn($role) => $role->permissions->pluck('name'))
            ->unique()
            ->contains($permission);
    }
}
