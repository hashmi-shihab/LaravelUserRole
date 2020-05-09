<?php

namespace App\Policies;

use App\User;
use App\State;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatePolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, State $state)
    {
        //
    }


    public function create(User $user)
    {
        return $this->getPermission($user,17);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,19);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,20);
    }


    public function restore(User $user, State $state)
    {
        //
    }


    public function forceDelete(User $user, State $state)
    {
        //
    }

    public function stateList(User $user)
    {
        return $this->getPermission($user,18);
    }

    public function stateTag(User $user)
    {
        return $this->getPermission($user,39);
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
