<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');

//Eliminar
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');

//Buscar
$routes->get('buscar_mascotas/(:num)','MascotasController::buscarMascotas/$1');

//Modificar
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');





