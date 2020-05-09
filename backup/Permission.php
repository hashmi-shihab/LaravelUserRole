<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['permission','roles_id'];

    public function role()
    {
        return $this->belongsTo('App\Role', 'roles_id');
    }
}
