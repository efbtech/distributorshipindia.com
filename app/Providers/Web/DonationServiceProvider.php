<?php

namespace App\Providers\Web;

use Illuminate\Support\ServiceProvider;

use App\Services\Web\DonationServices;
use App\Interfaces\Web\DonationServiceInterface;

use App\Interfaces\Web\DonationInterface;
use App\Repository\Web\DonationRepository;

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
