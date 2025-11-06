<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('historialmedico','HistorialMedicoController::index');

//Agregar
$routes->post('agregarregistro','HistorialMedicoController::agregarregistro');

//Eliminar


//Buscar


//Modificar