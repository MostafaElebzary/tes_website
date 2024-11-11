<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Team;
use App\Models\Testimonials;
use App\Models\WorkProcess;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Cache;
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
        app()->setLocale('ar');
        if (Schema::hasTable('settings')) {
            $globalSetting = Cache::get('settings');
            if (!$globalSetting) {
                $settings = Cache::rememberForever('settings', function () {
                    return Setting::all();
                });

                View::share(compact('settings',));
            }
            View::share('testimonials', Testimonials::all());
            View::share('work_process', WorkProcess::all());
            View::share('teams', Team::all());
        }
    }
}
