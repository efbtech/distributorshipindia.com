<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\DonationServices;
use App\Interfaces\Admin\DonationServiceInterface;

use App\Interfaces\Admin\DonationInterface;
use App\Repository\Admin\DonationRepository;

class DonationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(DonationInterface::Class, DonationRepository::Class);
        $this->app->bind(DonationServiceInterface::Class, DonationServices::Class);
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
