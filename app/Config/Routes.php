<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/booking', 'Home::booking');
$routes->get('/availability', 'Home::availability');
