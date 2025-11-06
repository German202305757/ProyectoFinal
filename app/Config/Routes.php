<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar
$routes->get('solicitudes','SolicitudesController::index');
$routes->post('agregar_solicitud','SolicitudesController::agregarSolitud');

//Eliminar


//Buscar


//Modificar
