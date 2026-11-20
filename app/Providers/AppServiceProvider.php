<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        // En producción, todas las URL generadas (canonical, sitemap, og:url...) con https.
        // Sin esto, detrás de un proxy o balanceador pueden salir con http y Google las ve como otra web.
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
