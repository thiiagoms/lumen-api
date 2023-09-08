<?php

namespace App\Providers;

use App\Contracts\Series\SeriesContract;
use App\Repositories\Series\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
    }
}
