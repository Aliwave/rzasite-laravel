<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\User;
use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function(User $user){
            return $user->isAdmin();
        });

        Gate::define('teacher',function(User $user){
            return $user->isTeacher() || $user->isAdmin();
        });

        Gate::define('student',function(User $user){
            return $user->isStudent() || $user->isAdmin() || $user->isTeacher();
        });
        //
    }
}
