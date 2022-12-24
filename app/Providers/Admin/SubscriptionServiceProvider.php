<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\SubscriptionServices;
use App\Interfaces\Admin\SubscriptionServiceInterface;

use App\Interfaces\Admin\SubscriptionInterface;
use App\Repository\Admin\SubscriptionRepository;

class SubscriptionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(SubscriptionInterface::Class, SubscriptionRepository::Class);
        $this->app->bind(SubscriptionServiceInterface::Class, SubscriptionServices::Class);
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
