<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{

    protected $listen = [
        \App\Events\FileApproved::class => [
            \App\Listeners\SendEmailOnFileApproved::class,
        ],
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is-admin',function (User $user): bool{
            return $user->isAdm();
        });

        Gate::define('owner',function (User $user, object $register): bool{
            return $user->id === $register->user_id;
        });
    }
}
