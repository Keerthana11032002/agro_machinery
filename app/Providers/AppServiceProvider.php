<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Setting;

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
        
        $contentUrl = env('CONTENT_URL', 'http://localhost/agro_machinery_admin/public/');
        $setting = Setting::first();
        View::share(compact('contentUrl', 'setting'));
        paginator::useBootstrapFive();
    }
}
