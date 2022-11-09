<?php

namespace App\Providers;

use App\View\Components\CarouselEstablishment;
use App\View\Components\GridEstablishment;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Blade::component('grid-establishment', GridEstablishment::class);
        Blade::component('carousel-establishment', CarouselEstablishment::class);
    }
}
