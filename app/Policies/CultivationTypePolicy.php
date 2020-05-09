<?php

namespace App\Policies;

use App\User;
use App\CultivationType;
use Illuminate\Auth\Access\HandlesAuthorization;

class CultivationTypePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, CultivationType $cultivationType)
    {
        //
    }


    public function create(User $user)
    {
        return $this->getPermission($user,13);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,15);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,16);
    }


    public function restore(User $user, CultivationType $cultivationType)
    {
        //
    }


    public function forceDelete(User $user, CultivationType $cultivationType)
    {
        //
    }

    public function cultivationTypeList(User $user)
    {
        return $this->getPermission($user,14);
    }

    public function cultivationTypeTag(User $user)
    {
        return $this->getPermission($user,38);
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
