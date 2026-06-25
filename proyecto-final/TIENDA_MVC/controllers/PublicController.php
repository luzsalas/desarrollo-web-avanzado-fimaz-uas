<?php
namespace Controllers;
//Este es el el controlador publico
//gestiona la vista del catálogo accesible para todos los usuarios visitantes,
//permitiendo la visualización general de los productos disponibles y procesando
//las peticiones de búsqueda filtradas por nombre o descripción.
use Models\ProductoModel;

class PublicController
{
    public function catalogo(): void
    {
        $termino = trim($_GET['buscar'] ?? '');
        $porPagina = 6;
        $paginaActual = max(1, (int)($_GET['pagina'] ?? 1));
        $offset = ($paginaActual - 1) * $porPagina;

        $productoModel = new ProductoModel();
        $totalProductos = $productoModel->contarPublico($termino);
        $productos = $productoModel->buscarPublicoPaginado($termino, $porPagina, $offset);
        $totalPaginas = (int)ceil($totalProductos / $porPagina);

        require_once __DIR__ . '/../views/public/catalogo.php';
    }
}
