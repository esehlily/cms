<?php

namespace App\Policies;

use App\Models\Complaint;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ComplaintPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Complaint $complaint)
    {
        return $user->id === $complaint->user_id || $user->isAdmin();
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $user, Complaint $complaint)
    {
        return $user->isAdmin();
    }

    public function delete(User $user, Complaint $complaint)
    {
        return $user->isAdmin();
    }

}
