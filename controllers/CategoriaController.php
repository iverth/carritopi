<?php

namespace Controllers;

use App\Router;

class CategoriaController {

    public static function index(Router $router) {
       $router->renderView('admin/categorias/index'); 
    }
    public static function error(Router $router) {

        $router->renderView('paginas/404', [
            'titulo' => 'Página no encontrada'
        ]);
    }
}