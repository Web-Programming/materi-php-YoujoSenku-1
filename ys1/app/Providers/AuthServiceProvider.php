<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //mengelola product hanya dilakukan oleh admin
        Gate::define('manage-products', function ($user) {
            return $user->role === 'admin';
        });

        //update product hanya dilakukan oleh admin dan sales
        Gate::define('update-product', function (User $user){
            return $user->role === 'admin' || $user->role === 'sales';
        });

        //menghapus product hanya dilakukan oleh admin
        Gate::define('delete-product', function (User $user){
            return $user->role === 'admin';
        });

        //membuat product dapat dilakukan oleh user yang sudah login
        Gate::define('create-product', function (User $user){
            return $user->role === 'sales';
        });
    }
}
