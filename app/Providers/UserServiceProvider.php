<?php

namespace App\Providers;

use App\Services\ServiceImpls\UserServiceImpl;
use App\Services\UserServices;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register services.
     */

     public array $singletons = [
        UserServices::class => UserServiceImpl::class
     ];

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }

    public function provides():array
    {
        return [UserServices::class];
    }
}
