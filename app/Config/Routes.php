<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Agregar
$routes->get('/', 'Home::index');
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');

//Eliminar
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');

//Buscar


//Modificar
