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


//Buscar


//Modificar
