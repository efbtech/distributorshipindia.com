<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\BlogServices;
use App\Interfaces\Admin\BlogServiceInterface;

use App\Interfaces\Admin\BlogInterface;
use App\Repository\Admin\BlogRepository;

class BlogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BlogInterface::Class, BlogRepository::Class);
        $this->app->bind(BlogServiceInterface::Class, BlogServices::Class);
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
