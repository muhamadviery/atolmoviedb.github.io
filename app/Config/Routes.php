<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'Film::index');
$routes->get('film/search', 'Film::search');
$routes->get('film/detail/(:num)', 'Film::detail/$1');
$routes->get('film/actor/(:num)', 'Film::actor/$1');
