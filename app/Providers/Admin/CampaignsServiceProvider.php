<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\CampaignsServices;
use App\Interfaces\Admin\CampaignsServiceInterface;

use App\Interfaces\Admin\CampaignsInterface;
use App\Repository\Admin\CampaignsRepository;

class CampaignsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(CampaignsInterface::Class, CampaignsRepository::Class);
        $this->app->bind(CampaignsServiceInterface::Class, CampaignsServices::Class);
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
