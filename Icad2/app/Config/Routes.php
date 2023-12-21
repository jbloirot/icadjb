<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


//Admin//
$routes->get('/newuser','New_User::index',['filter' => 'authGuard']);
$routes->post('/newuser/create','New_User::create');

//Login
$routes->get('/login', 'Login::index');
$routes->post('/login/connexion', 'Login::connexion');

//Deconnection
$routes->post('/login/deconnection','Login::signOut');

//accueil
$routes->get('/', 'Accueil::index');

// $routes->get('/test','Login::test',['filter' => 'authGuard']);