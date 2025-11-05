<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar


//Eliminar
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');

//Buscar


//Modificar
