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
