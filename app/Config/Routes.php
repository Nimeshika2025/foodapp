<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'About::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/contact', 'Contact::index');
$routes->match(['get','post'], 'menu', 'Menu::index');
$routes->get('foods', 'Menu::foods');
$routes->get('foods/delete/(:num)', 'Menu::delete/$1');
$routes->get('foods/edit/(:num)', 'Menu::edit/$1');
$routes->post('foods/update/(:num)', 'Menu::update/$1');
$routes->get('/login', 'Login::login');
$routes->post('/login', 'Login::checkLogin');
$routes->get('/logout', 'Login::logout');