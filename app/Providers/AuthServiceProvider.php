<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('users', function($user){
            return count(array_intersect(["ADMIN"], json_decode($user->roles)));
        });
      
        Gate::define('petugas', function($user){
            return count(array_intersect(["ADMIN", "STAFF"], json_decode($user->roles)));
        });
      
        Gate::define('siswa', function($user){
            return count(array_intersect(["ADMIN", "STAFF"], json_decode($user->roles)));
        });
      
        Gate::define('spp', function($user){
            return count(array_intersect(["ADMIN", "STAFF", "COSTUMER"], json_decode($user->roles)));
        });
    }
}
