<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Brand;
use App\Models\Car;
use App\Models\Contact;
use App\Models\Manager;
use App\Models\Page;
use Illuminate\Pagination\Paginator;
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
        Manager::unguard();
        Contact::unguard();
        Page::unguard();
        Branch::unguard();
        Brand::unguard();
        Car::unguard();
    }
}
