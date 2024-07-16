<?php

use App\Router;
use Controllers\CategoriaController;
use Controllers\DashboardController;
use Controllers\PaginasController;

require_once __DIR__ .'/../includes/app.php';

$router = new Router();

// Acceso público
$router->get("/", [PaginasController::class, 'index']);
$router->get('/404', [PaginasController::class, 'error']);

//acceso privado
$router->get('/admin', [DashboardController::class, 'index']);
$router->get('/admin/categorias', [CategoriaController::class, 'index']);

$router->comprobarRutas();