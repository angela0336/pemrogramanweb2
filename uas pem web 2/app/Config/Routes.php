<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('images/(:segment)', 'Home::images/$1');
$routes->get('uploads/images/(:segment)', 'Home::images/$1');
$routes->get('checkout', 'Home::checkout');
$routes->get('success', 'Home::success');

service('auth')->routes($routes);

// Admin
$routes->group('admin', ['filter' => 'group:admin'], function ($routes) {
    $routes->get('dataproduk', 'AdminController::dataproduk');
    $routes->post('dataproduk', 'AdminController::create_produk');
    $routes->post('create_produk', 'AdminController::create_produk');
    $routes->get('dataproduk/(:segment)/edit', 'AdminController::edit_produk/$1');
    $routes->post('dataproduk/(:segment)/update', 'AdminController::update_produk/$1');
    $routes->get('dataproduk/(:segment)/delete', 'AdminController::delete_produk/$1');

    $routes->get('chart', 'AdminController::chart');
});
