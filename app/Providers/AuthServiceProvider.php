<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Permission;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//         \App\Models\Post::class => \App\Policies\PostPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // admin, editer, author, member
        Gate::define('edit-profile', function($user) {
           return true;
        });

        foreach(Permission::all() as $permission) {
//            dd($permission->id);
            Gate::define($permission->name, function ($user) use ($permission) {;
                return $user->hasPermission($permission->id);
            });
        }
    }
}
