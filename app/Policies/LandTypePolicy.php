<?php

namespace App\Policies;

use App\User;
use App\LandType;
use Illuminate\Auth\Access\HandlesAuthorization;

class LandTypePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, LandType $landType)
    {
        //
    }

    public function create(User $user)
    {
        return $this->getPermission($user,5);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,7);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,8);
    }


    public function restore(User $user, LandType $landType)
    {
        //
    }


    public function forceDelete(User $user, LandType $landType)
    {
        //
    }

    public function landTypeList(User $user)
    {
        return $this->getPermission($user,6);
    }

    public function landTypeTag(User $user)
    {
        return $this->getPermission($user,36);
    }

    protected function getPermission($user,$p_id)
    {
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
