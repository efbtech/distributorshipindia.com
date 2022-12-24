<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\CMSServices;
use App\Interfaces\Admin\CMSServiceInterface;

use App\Interfaces\Admin\CMSInterface;
use App\Repository\Admin\CMSRepository;

class CMSServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CMSInterface::Class, CMSRepository::Class);
        $this->app->bind(CMSServiceInterface::Class, CMSServices::Class);
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
