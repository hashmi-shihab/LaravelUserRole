<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, User $model)
    {
        //
    }


    public function create(User $user)
    {
        return $this->getPermission($user,30);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,32);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,33);
    }


    public function restore(User $user, User $model)
    {
        //
    }

    public function forceDelete(User $user, User $model)
    {
        //
    }

    public function usersList(User $user)
    {
        return $this->getPermission($user,31);
    }

    public function usersTag(User $user)
    {
        return $this->getPermission($user,34);
    }

    public function configurationTag(User $user)
    {
        return $this->getPermission($user,41);
    }

    public function propertiesTag(User $user)
    {
        return $this->getPermission($user,42);
    }

    public function settingsTag(User $user)
    {
        return $this->getPermission($user,43);
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
