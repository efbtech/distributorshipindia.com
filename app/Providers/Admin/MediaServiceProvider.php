<?php

namespace App\Providers\Admin;

use Illuminate\Support\ServiceProvider;

use App\Services\Admin\MediaServices;
use App\Interfaces\Admin\MediaServiceInterface;

use App\Interfaces\Admin\MediaInterface;
use App\Repository\Admin\MediaRepository;

class MediaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(MediaInterface::Class, MediaRepository::Class);
        $this->app->bind(MediaServiceInterface::Class, MediaServices::Class);
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