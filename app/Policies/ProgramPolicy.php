<?php

namespace App\Policies;

use App\Program;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProgramPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function destroy(User $user, Program $programrecord)
    {
        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            return true;
        } else {
            return false;
        }
    }

}
