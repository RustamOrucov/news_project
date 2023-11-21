<?php

namespace App\Providers;

use App\Models\Advertise;
use Carbon\Carbon;
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
        $locale = config('app.locale');
        Carbon::setLocale($locale);

        $currentDate = Carbon::now()->isoFormat('DD MMMM YYYY');
        view()->share('currentDate',$currentDate);
    }
}
