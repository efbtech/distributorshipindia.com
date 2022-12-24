<?php

namespace App\Providers\Web;

use Illuminate\Support\ServiceProvider;

use App\Services\Web\GeneralServices;
use App\Interfaces\Web\GeneralServiceInterface;

use App\Interfaces\Web\GeneralInterface;
use App\Repository\Web\GeneralRepository;

class GeneralServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind(GeneralInterface::Class, GeneralRepository::Class);
        $this->app->bind(GeneralServiceInterface::Class, GeneralServices::Class);
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
