<?php
// Autoload de clases y uso de controladores
require_once __DIR__ . '/config/Autoload.php';

use Controllers\AuthController;
use Controllers\ProductoController;
use Controllers\PublicController;

// Procesamiento de la URL y detección de la ruta activa
$uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$base = 'TIENDA_MVC';
$route = $_GET['route'] ?? (str_starts_with($uri, $base) ? (trim(substr($uri, strlen($base)), '/') ?: 'catalogo') : 'catalogo');

// Instancia de controladores
$authController = new AuthController();
$productoController = new ProductoController();
$publicController = new PublicController();

// Enrutador
switch ($route) {
    // Autenticación
    case 'login':
        $authController->showLogin();
        break;

    case 'auth/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { $authController->login(); }
        break;

    case 'logout':
        $authController->logout();
        break;

    // Administración de Productos
    case 'productos':
        $productoController->index();
        break;

    case 'api/productos':
        $productoController->apiProductos();
        break;

    case 'productos/create':
        $productoController->create();
        break;

    case 'productos/store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { $productoController->store(); }
        break;

    case 'productos/edit':
        $productoController->edit();
        break;

    case 'productos/update':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { $productoController->update(); }
        break;

    case 'productos/delete':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { $productoController->delete(); }
        break;

    // Catálogo público (Ruta por defecto)
    case 'catalogo':
    default:
        $publicController->catalogo();
        break;
}
