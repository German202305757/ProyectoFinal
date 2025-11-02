<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('usuarios','UsuariosController::index');
//Agregar
$routes->post('agregar_usuario','UsuariosController::agregarUsuario');

//Eliminar


//Buscar


//Modificar
