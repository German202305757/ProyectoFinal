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


//inicio de sesion
$routes->get('/', 'Home::index');
$routes->get('autores','AutoresController::index');
$routes->post('iniciar_sesion','LoginController::index');
$routes->get('cerrar_sesion','LoginController::cerrarSesion');


$routes->get('menu_admin','Home::verMenuAdmin');
$routes->get('menu_editor','Home::verMenuEditor');
$routes->get('menu_cliente','Home::verMenuClientes');