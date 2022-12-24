<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\DashboardServices;
use App\Interfaces\Admin\DashboardServiceInterface;

use App\Interfaces\Admin\DashboardInterface;
use App\Repository\Admin\DashboardRepository;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DashboardInterface::Class, DashboardRepository::Class);
        $this->app->bind(DashboardServiceInterface::Class, DashboardServices::Class);
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
