<?php

namespace Controllers;

use App\Router;

class DashboardController {

    public static function index(Router $router) {
       $router->renderView('admin/dashboard/index'); 
    }
    public static function error(Router $router) {

        $router->renderView('paginas/404', [
            'titulo' => 'Página no encontrada'
        ]);
    }
}