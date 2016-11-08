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
        return $user->hasRole('admin');
    }

}
