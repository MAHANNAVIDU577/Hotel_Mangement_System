<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index');
$routes->get('/menu', 'User::menus');
$routes->get('/about', 'User::about');
$routes->get('/reservation', 'User::reservation');