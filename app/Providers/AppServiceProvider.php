<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\IPLocationService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Source: App
        |--------------------------------------------------------------------------
        */

        $App_Data = appMain();
        view()->share('APP_Name', $App_Data['Name']);
        view()->share('APP_Version', $App_Data['Version']);
        view()->share('APP_Developer', $App_Data['Developer']);
        view()->share('APP_LaunchDate', $App_Data['LaunchDate']);
        view()->share('APP_LaunchYear', $App_Data['LaunchYear']);
        view()->share('APP_TransitionTime', $App_Data['TransitionTime']);

        /*
        |--------------------------------------------------------------------------
        | Source: Autoexec
        |--------------------------------------------------------------------------
        */

        $Autoexec_Data = autoexecMain();
        view()->share('AE_Country', $Autoexec_Data['Country']);

        /*
        |--------------------------------------------------------------------------
        | Source: Gen
        |--------------------------------------------------------------------------
        */

        $Gen_Data = genTime();
        view()->share('GEN_Moment', $Gen_Data['Moment']);
        view()->share('GEN_YearAgo', $Gen_Data['YearAgo']);
        view()->share('GEN_YearAgo_Minutes', $Gen_Data['YearAgo_Minutes']);
        view()->share('GEN_YearAhead', $Gen_Data['YearAhead']);
        view()->share('GEN_YearAhead_Minutes', $Gen_Data['YearAhead_Minutes']);
    }
}
