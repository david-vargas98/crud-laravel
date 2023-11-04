<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator; //Se agrega esta ruta para el paginador de bootstrap

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
        //Se le dice que use los estilos de bootstrap 5
        Paginator::useBootstrapFive();
    }
}
