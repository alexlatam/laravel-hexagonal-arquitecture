<?php

namespace Src\Example\User\Infrastructure\Services;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

final class RouteServiceProvider extends ServiceProvider
{
    // El archivo de ruta apuntara a este namespace
    // las rutas deben apuntar a los controladores, que se encargaran de las peticiones
    protected $namespace = 'Src\Example\User\Infrastructure\Controllers';

    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapRoutes();
    }

    public function mapRoutes()
    {
        // Especificamos la ruta del archivo de rutas, osea a donde van a llegar las peticiones de las rutas
        // Por defecto Laravel usa el archivo routes/web.php
        Route::prefix('api/users')
            ->namespace($this->namespace)
            ->group(base_path('src/Example/User/Infrastructure/Routes/Api.php'));

    }
}
