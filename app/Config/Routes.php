<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar
$routes->post('agregarregistro','HistorialMedicoController::agregarregistro');


//Eliminar
$routes->get('eliminarregistro/(:num)','HistorialMedicoController::eliminarregistro/$1');

//Buscar


//Modificar
