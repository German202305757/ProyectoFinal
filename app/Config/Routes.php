<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar
$routes->post('agregar_adoptante','AdoptantesController::agregarAdoptante');

//Eliminar
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');

//Buscar


//Modificar
