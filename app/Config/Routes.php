<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//Agregar


//Eliminar
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');

//Buscar


//Modificar
