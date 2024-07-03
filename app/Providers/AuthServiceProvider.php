<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        //

        
        
        Gate::define('access-admin-page', function ($user) {
            return $user->role_id <= 3; 
        });
        Gate::define('IsAboveAdmin', function ($user) {
            return $user->role_id <= 3; 
        });
        Gate::define('IsBelowAdmin', function ($user) {
            return $user->role_id > 3; 
        });
        


        Gate::define('IsNoteAdmin', function ($user) {
            return $user->role_id > 3; 
        });
        Gate::define('IsAdmin', function ($user) {
            return $user->role_id <= 3; 
        });
        Gate::define('IsOwner', function ($user) {
            return $user->role_id < 3; 
        });



        Gate::define('access-contruction-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 1); 
        });
        Gate::define('access-school-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 2); 
        });
        Gate::define('access-university-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 3); 
        });
        Gate::define('access-relation-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 4); 
        });
        Gate::define('access-tour-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 5); 
        });
        Gate::define('access-testCenter-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 6); 
        });
        Gate::define('access-charity-page',  function ($user) {
            return $user->userRoleCate->contains('category_id', 7); 
        });
    }
}
