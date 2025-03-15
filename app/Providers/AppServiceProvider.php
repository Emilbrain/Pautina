<?php

namespace App\Providers;

use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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
        View::composer('components.header', static function ($view) {
            $issetApplication = null;
            $fileExists = false;

            if (Auth::check()) {
                $issetApplication = Application::where('user_id', Auth::id())->first();
                $fileExists = $issetApplication && $issetApplication->answer;
            }

            $view->with(compact('issetApplication', 'fileExists'));
        });
    }
}
