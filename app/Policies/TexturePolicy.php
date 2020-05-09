<?php

namespace App\Policies;

use App\User;
use App\Texture;
use Illuminate\Auth\Access\HandlesAuthorization;

class TexturePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, Texture $texture)
    {
        //
    }


    public function create(User $user)
    {
        return $this->getPermission($user,9);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,11);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,12);
    }


    public function restore(User $user, Texture $texture)
    {
        //
    }


    public function forceDelete(User $user, Texture $texture)
    {
        //
    }

    public function textureList(User $user)
    {
        return $this->getPermission($user,10);
    }

    public function textureTag(User $user)
    {
        return $this->getPermission($user,37);
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
