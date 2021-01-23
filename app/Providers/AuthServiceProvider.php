<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\User;

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

        Gate::define('add.booking', function (User $user) {
            return $user->hasAnyRole(['superadmin', 'admin']);
        });

        Gate::define('edit.booking', function (User $user) {
            return $user->hasAnyRole(['superadmin', 'admin']);
        });

        Gate::define('edit.users', function (User $user) {
            return $user->hasAnyRole(['superadmin', 'admin']);
        });

        Gate::define('edit.all', function (User $user) {
            return $user->hasAnyRole(['superadmin', 'admin']);
        });

        Gate::define('access.admin', function (User $user) {
            return $user->hasAnyRole(['superadmin', 'admin']);
        });
    }
}
