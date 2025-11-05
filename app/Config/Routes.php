<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar


//Eliminar


//Buscar
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');

//Modificar
