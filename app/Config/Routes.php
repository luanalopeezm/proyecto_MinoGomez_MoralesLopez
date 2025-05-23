<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/terminos', 'Home::terminos_condiciones');
$routes->get('/comercializacion', 'Home::comercializacion');
$routes->get('/quienes_somos','Home::quienes_somos');
$routes->get('/productos','Home::productos');
$routes->get('/contacto', 'Home::contacto');

//registrarse
$routes->get('/registro', 'Home::registro');
$routes->post('/enviar-form', 'Usuario_controller::formValidation');

//login
$routes->get('/login', "Home::login");
$routes->post('/enviar-login', 'Login_controller::auth');
$routes->get('/logout', 'Login_controller::logout');
$routes->get('/dashboard', 'Dashboard_controller::index', ['filter' => 'auth']);

//productos
$routes->get('/listar_productos', "Producto_controller::index", ['filter' => 'auth']);
$routes->get('/productos_eliminados', "Producto_controller::productosEliminados", ['filter' => 'auth']);
$routes->get('/agregar_producto', "Producto_controller::creaProducto", ['filter' => 'auth']);
$routes->post('/guardar-producto', 'Producto_controller::store', ['filter' => 'auth']);
$routes->get('/eliminar_producto/(:num)', "Producto_controller::borrarProducto/$1", ['filter' => 'auth']);
$routes->get('/activar_producto/(:num)', "Producto_controller::activarProducto/$1", ['filter' => 'auth']);
$routes->get('/editar_producto/(:num)', "Producto_controller::editarProducto/$1", ['filter' => 'auth']);
$routes->post('/actualizar-producto/(:num)', "Producto_controller::actualizarProducto/$1", ['filter' => 'auth']);

//clientes
$routes->get('/listar_clientes', "Usuario_controller::index", ['filter' => 'auth']);
$routes->get('/eliminar_cliente/(:num)', "Usuario_controller::borrarCliente/$1", ['filter' => 'auth']);
$routes->get('/clientes_eliminados', "Usuario_controller::clientesEliminados", ['filter' => 'auth']);
$routes->get('/activar_cliente/(:num)', "Usuario_controller::activarCliente/$1", ['filter' => 'auth']);
$routes->get('/editar_cliente/(:num)', "Usuario_controller::editarCliente/$1", ['filter' => 'auth']);
$routes->post('/actualizar-cliente/(:num)', "Usuario_controller::actualizarCliente/$1", ['filter' => 'auth']);