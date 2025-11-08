<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//Agregar
$routes->get('/', 'Home::index');
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');
$routes->get('/', 'Home::index');
$routes->get('usuarios','UsuariosController::index');
$routes->get('adoptante','AdoptantesController::index');

$routes->get('historialmedico','HistorialMedicoController::index');
//Agregar
$routes->post('agregarregistro','HistorialMedicoController::agregarregistro');
$routes->get('solicitudes','SolicitudesController::index');
$routes->post('agregar_solicitud','SolicitudesController::agregarSolitud');
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');

//Eliminar
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');

//Buscar
$routes->get('buscar_mascotas/(:num)','MascotasController::buscarMascotas/$1');

//Modificar
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');


//Agregar
$routes->post('agregarregistro','HistorialMedicoController::agregarregistro');



$routes->get('/', 'Home::index');
$routes->get('mascotas','MascotasController::index');
$routes->post('agregar_mascotas','MascotasController::agregarMascotas');

//Eliminar
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');

//Buscar
$routes->get('buscar_mascotas/(:num)','MascotasController::buscarMascotas/$1');
$routes->get('citas','CitasController::index');
$routes->post('agregar_citas','CitasController::agregarCitas');

//Eliminar
$routes->get('eliminarregistro/(:num)','HistorialMedicoController::eliminarregistro/$1');
$routes->get('eliminar_solicitud/(:num)','SolicitudesController::eliminarSolicitud/$1');
$routes->get('eliminar_mascotas/(:num)','MascotasController::eliminarMascotas/$1');
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');

//Buscar
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');

//Modificar
$routes->post('modificar_citas','CitasController::modificarCitas');

$routes->post('agregar_adoptante','AdoptantesController::agregarAdoptante');

//Eliminar
$routes->get('eliminar_citas/(:num)','CitasController::eliminarCitas/$1');
$routes->get('eliminar_usuario/(:num)','UsuariosController::eliminarUsuario/$1');
$routes->get('eliminar_adoptante/(:num)','AdoptantesController::eliminarAdoptante/$1');

//Buscar
$routes->get('buscar_citas/(:num)','CitasController::buscarCitas/$1');
$routes->get('buscar_usuario/(:num)','UsuariosController::buscarUsuario/$1');
$routes->get('buscar_adoptante/(:num)','AdoptantesController::buscarAdoptante/$1');


//Modificar
//Modificar
$routes->post('modificar_solicitud','SolicitudesController::modificarSolicitud');
$routes->post('modificar_mascotas','MascotasController::modificarMascotas');
$routes->post('modificar_citas','CitasController::modificarCitas');
$routes->post('modificar_usuario', 'UsuariosController::modificarUsuario');
//Modificar}
$routes->post('modificar_adoptante', 'AdoptantesController::modificarAdoptante');


//inicio de sesion
$routes->get('/', 'Home::index');
$routes->get('autores','AutoresController::index');
$routes->post('iniciar_sesion','LoginController::index');
$routes->get('cerrar_sesion','LoginController::cerrarSesion');


$routes->get('menu_admin','Home::verMenuAdmin');
$routes->get('menu_editor','Home::verMenuEditor');
$routes->get('menu_cliente','Home::verMenuClientes');
