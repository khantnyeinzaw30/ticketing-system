<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function view(User $user): bool
    {
        if ($user->hasRole('admin')) {
            return true;
        }

        if ($user->hasRole('agent')) {
            return true;
        }

        return false;
    }

    public function update(User $user)
    {
        if ($user->hasRole('agent')) {
            return true;
        }

        return false;
    }
}
