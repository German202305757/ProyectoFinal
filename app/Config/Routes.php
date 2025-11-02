<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('usuarios','UsuariosController::index');
//Agregar


//Eliminar
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');

//Buscar


//Modificar
$routes->post('modificar_usuario', 'UsuariosController::modificarUsuario');