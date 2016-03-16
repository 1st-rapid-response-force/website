<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Application locale defaults for various components
         *
         * These will be overridden by LocaleMiddleware if the session local is set
         */

        /**
         * setLocale for php. Enables ->formatLocalized() with localized values for dates
         */
        setLocale(LC_TIME, config('app.locale_php'));

        /**
         * setLocale to use Carbon source locales. Enables diffForHumans() localized
         */
        Carbon::setLocale(config('app.locale'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Frontend\User\Steam\SteamContract::class,
            \App\Repositories\Frontend\User\Steam\EloquentSteamRepository::class
        );

        $this->app->bind(
            \App\Repositories\Frontend\User\ApplicationContract::class,
            \App\Repositories\Frontend\User\EloquentApplicationRepository::class
        );

        $this->app->bind(
            \App\Repositories\Frontend\File\FileContract::class,
            \App\Repositories\Frontend\User\EloquentFileRepository::class
        );
    }
}
