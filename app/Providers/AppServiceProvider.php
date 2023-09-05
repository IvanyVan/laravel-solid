<?php

namespace App\Providers;

use App\Repositorios\ChoferMiniVanRepository;
use App\Repositorios\ChoferRepository;
use App\StaticRepository\StaticChoferMiniVanRepository;
use App\StaticRepository\StaticChoferRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind(ChoferRepository::class,StaticChoferRepository::class);
       $this->app->bind(ChoferMiniVanRepository::class,StaticChoferMiniVanRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
