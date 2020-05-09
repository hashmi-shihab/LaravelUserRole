<?php

namespace App\Policies;

use App\User;
use App\LandClass;
use Illuminate\Auth\Access\HandlesAuthorization;

class LandClassPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user)
    {
        /*return $this->getPermission($user,2);*/
    }


    public function create(User $user)
    {
        return $this->getPermission($user,1);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,3);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,4);
    }


    public function restore(User $user, LandClass $landClass)
    {
        //
    }


    public function forceDelete(User $user, LandClass $landClass)
    {
        //
    }

    public function landClassTag(User $user)
    {
        return $this->getPermission($user,35);
    }

    public function landClassList(User $user)
    {
        return $this->getPermission($user,2);
    }

    protected function getPermission($user,$p_id)
    {
        /*dd($user);*/
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $p_id) {
                    return true;
                }
            }
        }
        return false;
    }
}
