<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

use App\Controllers\News;

$routes->get('news/news/', [News::class, 'index']);
$routes->get('news/news/(:segment)', [News::class, 'show']);
