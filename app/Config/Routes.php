<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/', 'Dashboard::index')

// siswa
$routes->get('/', 'Login::index');
$routes->get('/Login_siswa', 'Login::index');
$routes->get('/Login/login_siswa', 'Login::login_siswa');
$routes->post('/Login/login_siswa', 'Login::login_siswa');
$routes->get('/Siswa', 'Siswa::index');
$routes->get('/Siswa/logout_siswa', 'Login::logout_siswa');
$routes->get('/Siswa/password', 'Siswa::password');


// $routes->get('/dashboard', 'Dashboard::index',['filter' => 'auth']);


// Admin
$routes->get('/Admin/login', 'Login::admin');
$routes->get('/Login/login_admin', 'Login::login_admin');
$routes->get('/Logout_admin', 'Login::logout_admin');
$routes->post('/Login/login_admin', 'Login::login_admin');
$routes->get('/Admin', 'Admin::index');



// $routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
//     // $routes->get('/Admin/login', 'Login::admin');
//     // $routes->get('/Login/login_admin', 'Login::login_admin');
//     // $routes->post('/Login/login_admin', 'Login::login_admin');
//     $routes->get('/Admin', 'Admin::index');
// });

// $routes->group('user', ['namespace' => 'App\Controllers\User'], function ($routes) {
//     $routes->get('login', 'Auth::login');
//     $routes->post('authenticate', 'Auth::authenticate');
// });