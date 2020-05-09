<?php

namespace App\Policies;

use App\User;
use App\SoilNutrition;
use Illuminate\Auth\Access\HandlesAuthorization;

class SoilNutritionPolicy
{
    use HandlesAuthorization;


    public function viewAny(User $user)
    {
        //
    }


    public function view(User $user, SoilNutrition $soilNutrition)
    {
        //
    }


    public function create(User $user)
    {
        return $this->getPermission($user,21);
    }


    public function update(User $user)
    {
        return $this->getPermission($user,23);
    }


    public function delete(User $user)
    {
        return $this->getPermission($user,24);
    }


    public function restore(User $user, SoilNutrition $soilNutrition)
    {
        //
    }


    public function forceDelete(User $user, SoilNutrition $soilNutrition)
    {
        //
    }

    public function soilNutritionList(User $user)
    {
        return $this->getPermission($user,22);
    }

    public function soilNutritionTag(User $user)
    {
        return $this->getPermission($user,40);
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
