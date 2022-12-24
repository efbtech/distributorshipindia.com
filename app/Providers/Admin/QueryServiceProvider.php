<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\QueryServices;
use App\Interfaces\Admin\QueryServiceInterface;

use App\Interfaces\Admin\QueryInterface;
use App\Repository\Admin\QueryRepository;

class QueryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(QueryInterface::Class, QueryRepository::Class);
        $this->app->bind(QueryServiceInterface::Class, QueryServices::Class);
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
