<?php namespace Webcastle\Adminbase;

use Illuminate\Support\ServiceProvider;

class AdminBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/views' => base_path('resources/admin/views'),
            __DIR__ . '/config/adminbase.php' => config_path('adminbase.php'),
            __DIR__ . '/Http/Controllers/AdminController.php' => base_path('app/Http/Controllers/AdminController.php'),
            __DIR__ . '/Http/Controllers/Admin' => base_path('app/Http/Controllers/Admin'),
            __DIR__ . '/Forms' => base_path('app/Forms'),
            __DIR__ . '/Http/Requests' => base_path('app/Http/Requests'),
            __DIR__ . '/Http/breadcrumbs.php' => base_path('app/Http/breadcrumbs.php'),
            __DIR__ . '/Models' => base_path('app/Models'),
        ]);
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__ . '/views', 'laravel-form-builder');

        

    }
}
