<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\LoginServices;
use App\Interfaces\Admin\LoginServiceInterface;

use App\Interfaces\Admin\LoginInterface;
use App\Repository\Admin\LoginRepository;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoginInterface::Class, LoginRepository::Class);
        $this->app->bind(LoginServiceInterface::Class, LoginServices::Class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
