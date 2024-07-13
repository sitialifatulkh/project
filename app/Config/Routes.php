<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Home', 'pages::index');
$routes->get('/About2', 'pages::about');

$routes->get('/About', 'page::about');
$routes->get('/Contact', 'page::contact');
$routes->get('/Faqs', 'page::faqs');
$routes->get('/Tos', 'page::tos');
$routes->setAutoRoute(false);
