<?php

namespace App\Policies;

use App\Organization;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrganizationPolicy
{
    use HandlesAuthorization;


    public function __construct()
    {
        //
    }

    public function destroy(User $user, Organization $organizationrecord)
    {
        if ($user->hasRole('admin') || $user->hasRole('superadmin')) {
            return true;
        } else {
            return false;
        }
    }

}
