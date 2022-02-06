<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\Network;
use App\Models\Setting;
use App\View\Composers\ProfileComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// use Illuminate\Support\Carbon;
use Carbon\Carbon;

class ViewServiceProvider extends ServiceProvider
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
        view()->composer(['*'], function ($view) {
            $messages = Message::latest()
                ->take(3)
                ->get();
            $view->with('messages', $messages);
        });

        view()->composer(['*'], function ($view) {
            $setting = Setting::translatedIn(app()->getLocale())
                ->first();
            $view->with('setting', $setting);
        });
    }
}
