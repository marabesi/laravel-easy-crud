<?php

namespace EasyCrud\Providers;

use Illuminate\Support\ServiceProvider;

class EasyCrud extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../../views', 'easy-crud');

        $this->publishes([
            __DIR__ . '/../../assets/gentella' => public_path('vendor/easy-crud'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/../../config/easy-crud.php' => config_path('easy-crud.php'),
        ]);

        view()->composer('*', function($view) {
            return $view->with(config('easy-crud'));
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__. '/../../routes/web.php';
    }
}
