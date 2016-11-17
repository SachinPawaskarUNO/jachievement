<?php

namespace App\Policies;

use App\School;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SchoolPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function destroy(User $user, School $schoolrecord)
    {
        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            return true;
        } else {
            return false;
        }
    }

}
