<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];


    public function boot()
    {
        $this->registerPolicies();

        Gate::resource('landClass','App\Policies\LandClassPolicy');
        Gate::define('landClassList', 'App\Policies\LandClassPolicy@landClassList');
        Gate::define('landClassTag', 'App\Policies\LandClassPolicy@landClassTag');

        Gate::resource('landType','App\Policies\LandTypePolicy');
        Gate::define('landTypeList', 'App\Policies\LandTypePolicy@landTypeList');
        Gate::define('landTypeTag', 'App\Policies\LandTypePolicy@landTypeTag');

        Gate::resource('texture','App\Policies\TexturePolicy');
        Gate::define('textureList', 'App\Policies\TexturePolicy@textureList');
        Gate::define('textureTag', 'App\Policies\TexturePolicy@textureTag');

        Gate::resource('cultivationType','App\Policies\CultivationTypePolicy');
        Gate::define('cultivationTypeList', 'App\Policies\CultivationTypePolicy@cultivationTypeList');
        Gate::define('cultivationTypeTag', 'App\Policies\CultivationTypePolicy@cultivationTypeTag');

        Gate::resource('state','App\Policies\StatePolicy');
        Gate::define('stateList', 'App\Policies\StatePolicy@stateList');
        Gate::define('stateTag', 'App\Policies\StatePolicy@stateTag');

        Gate::resource('soilNutrition','App\Policies\SoilNutritionPolicy');
        Gate::define('soilNutritionList', 'App\Policies\SoilNutritionPolicy@soilNutritionList');
        Gate::define('soilNutritionTag', 'App\Policies\SoilNutritionPolicy@soilNutritionTag');

        Gate::resource('roles','App\Policies\RolePolicy');
        Gate::define('rolesList', 'App\Policies\RolePolicy@rolesList');
        Gate::define('rolesTag', 'App\Policies\RolePolicy@rolesTag');

        Gate::resource('users','App\Policies\UserPolicy');
        Gate::define('usersList', 'App\Policies\UserPolicy@usersList');
        Gate::define('usersTag', 'App\Policies\UserPolicy@usersTag');
        Gate::define('configurationTag', 'App\Policies\UserPolicy@configurationTag');
        Gate::define('propertiesTag', 'App\Policies\UserPolicy@propertiesTag');
        Gate::define('settingsTag', 'App\Policies\UserPolicy@settingsTag');

    }
}
