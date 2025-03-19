<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/services', 'Home::services');
$routes->get('/booking/(:any)', 'Home::booking');
$routes->get('/availability/(:any)/(:any)/(:any)/(:any)', 'Home::availability');
$routes->post('/availability/(:any)/(:any)/(:any)/(:any)', 'Home::availability');
$routes->get('/bookNow/(:any)/(:any)/(:any)', 'Home::bookNow');
$routes->get('/success/(:any)/(:any)/(:any)', 'Home::success');
$routes->post('/success/(:any)/(:any)/(:any)', 'Home::success');