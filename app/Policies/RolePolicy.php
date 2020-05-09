<?php

namespace App\Policies;

use App\User;
use App\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, Role $role)
    {

    }


    public function create(User $user)
    {
        return $this->getPermission($user,25);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,27);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,28);
    }


    public function restore(User $user, Role $role)
    {
        //
    }


    public function forceDelete(User $user, Role $role)
    {
        //
    }

    public function rolesList(User $user)
    {
        return $this->getPermission($user,26);
    }

    public function rolesTag(User $user)
    {
        return $this->getPermission($user,29);
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
