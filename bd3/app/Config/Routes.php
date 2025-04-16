<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::login');

$routes->get('/login.php', 'AuthController::login');
$routes->get('/login', 'AuthController::login');
$routes->get('/pantalla', 'AuthController::index');
// Ruta para autenticar al usuario

$routes->get('auth/login', 'AuthController::login');
$routes->post('/auth/loginAuth', 'AuthController::loginAuth');
$routes->get('/register', 'AuthController::register');

$routes->post('register/save', 'UsersController::save');
$routes->get('users/edit/(:num)', 'UsersController::editar/$1');

$routes->post('user/actualizar', 'UsersController::actualizar');
$routes->post('user/edit_password', 'UsersController::edit_password');

$routes->post('usuarios/eliminar/(:num)', 'UsersController::eliminar/$1');
$routes->post('users/edit/(:num)', 'UsersController::eliminar/$1');