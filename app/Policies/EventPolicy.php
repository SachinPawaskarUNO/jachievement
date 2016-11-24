<?php

namespace App\Policies;

use App\Campaign;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function destroy(User $user, Campaign $eventrecord)
    {
        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            return true;
        } else {
            return false;
        }
    }

}
