<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Homes
$routes->get('/', 'Home::index');
$routes->get('citas','CitasController::index');
$routes->get('mascotas','MascotasController::index');
$routes->get('usuarios','UsuariosController::index');
$routes->get('adoptante','AdoptantesController::index');
$routes->get('historialmedico','HistorialMedicoController::index');
$routes->get('solicitudes','SolicitudesController::index');

//Agregar
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');
$routes->post('agregarregistro','HistorialMedicoController::agregarregistro');
$routes->post('agregar_solicitud','SolicitudesController::agregarSolitud');
$routes->post('agregar_adoptante','AdoptantesController::agregarAdoptante');
$routes->post('agregar_citas','CitasController::agregarCitas');

//Eliminar
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');
$routes->get('eliminarregistro/(:num)','HistorialMedicoController::eliminarregistro/$1');
$routes->get('eliminar_solicitud/(:num)','SolicitudesController::eliminarSolicitud/$1');
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');
$routes->get('eliminar_adoptante/(:num)','AdoptantesController::eliminarAdoptante/$1');

//Buscar
$routes->get('buscar_mascotas/(:num)','MascotasController::buscarMascotas/$1');
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');
$routes->get('buscar_usuario/(:num)','UsuariosController::buscarUsuario/$1');
$routes->get('buscar_adoptante/(:num)','AdoptantesController::buscarAdoptante/$1');

//Modificar
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');
$routes->post('modificar_citas','CitasController::modificarCitas');
$routes->post('modificar_solicitud','SolicitudesController::modificarSolicitud');
$routes->post('modificar_usuario', 'UsuariosController::modificarUsuario');
$routes->post('modificar_adoptante', 'AdoptantesController::modificarAdoptante');