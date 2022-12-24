<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\VolunteerServices;
use App\Interfaces\Admin\VolunteerServiceInterface;

use App\Interfaces\Admin\VolunteerInterface;
use App\Repository\Admin\VolunteerRepository;

class VolunteerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VolunteerInterface::Class, VolunteerRepository::Class);
        $this->app->bind(VolunteerServiceInterface::Class, VolunteerServices::Class);
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
