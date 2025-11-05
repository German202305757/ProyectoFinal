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


//Buscar


//Modificar
