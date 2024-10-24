<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TicketPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermission('ticket_show');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Ticket $permission): bool
    {
        return $user->hasPermission('ticket_access');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermission('ticket_create');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Ticket $permission): bool
    {
        return $user->hasPermission('ticket_update');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Ticket $permission): bool
    {
        return $user->hasPermission('ticket_delete');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Ticket $permission): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Ticket $permission): bool
    {
        return false;
    }
}
