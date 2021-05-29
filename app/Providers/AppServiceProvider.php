<?php

namespace App\Providers;

use App\Repositories\Admin\Interfaces\MenuRepositoryInterface;
use App\Repositories\Admin\Interfaces\UserRepositoryInterface;
use App\Repositories\Admin\MenuRepository;
use App\Repositories\Admin\UserRepository;
use App\Services\Admin\Interfaces\MenuServiceInterface;
use App\Services\Admin\Interfaces\UserServiceInterface;
use App\Services\Admin\MenuService;
use App\Services\Admin\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // User
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(UserServiceInterface::class, UserService::class);
        // Menu
        $this->app->singleton(MenuRepositoryInterface::class, MenuRepository::class);
        $this->app->singleton(MenuServiceInterface::class, MenuService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
