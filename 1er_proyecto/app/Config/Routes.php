<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('principal_ultimo', 'Home::index');
$routes->get('quienes_somos', 'Home::funcion_quienes_somos');
$routes->get('acercade', 'Home::funcion_AcercaDe');
$routes->get('registro', 'Home::funcion_registro');
$routes->get('login', 'Home::funcion_login');