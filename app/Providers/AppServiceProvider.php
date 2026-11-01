<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        \Illuminate\Support\Facades\RateLimiter::for('portfolio-submissions', fn (\Illuminate\Http\Request $request) => [
            \Illuminate\Cache\RateLimiting\Limit::perMinute(3)->by('portfolio-minute:'.$request->ip()),
            \Illuminate\Cache\RateLimiting\Limit::perDay(10)->by('portfolio-day:'.$request->ip()),
        ]);
    }
}
