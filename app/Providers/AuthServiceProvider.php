<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Response;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //droit de gestion des utilisateurs
        Gate::define('manage-users', function (User $user) {
            return $user->hasAnyRole(['SUPERADMIN']);
        });

        //droit de gestion des offres
        Gate::define('manage-offers', function (User $user) {
            return $user->hasAnyRole(['SUPERADMIN','ADMIN']);
        });

    }
}
