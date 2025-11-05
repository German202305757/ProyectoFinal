<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar


//Eliminar


//Buscar


//Modificar
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');