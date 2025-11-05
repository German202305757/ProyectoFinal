<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar
$routes->get('citas','CitasController::index');
$routes->post('agregar_citas','CitasController::agregarCitas');

//Eliminar
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');

//Buscar
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');

//Modificar
$routes->post('modificar_citas','CitasController::modificarCitas');

