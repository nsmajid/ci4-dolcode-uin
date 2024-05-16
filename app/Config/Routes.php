<?php

use App\Controllers\Admin\Jabatan;
use App\Controllers\Admin\Karyawan;
use App\Controllers\Admin\Users;
use App\Controllers\Auth;
use App\Controllers\Coba;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('login', [Auth::class,'index']);
$routes->post('cek-login', [Auth::class,'cekLogin']);
$routes->post('logout', [Auth::class,'logout']);
$routes->get('logout', [Auth::class,'logout']);

$routes->get('coba','Coba::index');

$routes->get('coba',[Coba::class,'index']);
$routes->get('admin/user',[Users::class,'index']);
// $routes->resource('karyawan');

$routes->get('admin/karyawan', [Karyawan::class, 'index']);
$routes->get('admin/karyawan/new', [Karyawan::class, 'new']);
$routes->get('admin/karyawan/(:num)/edit', [Karyawan::class, 'edit/$1']);

$routes->post('admin/karyawan', [Karyawan::class, 'create']);
$routes->put('admin/karyawan/(:num)', [Karyawan::class, 'update/$1']);
$routes->delete('admin/karyawan/(:num)', [Karyawan::class, 'delete/$1']);


$routes->get('admin/jabatan', [Jabatan::class, 'index']);

$routes->get('ajax/karyawan', [Karyawan::class, 'ajax']);
$routes->get('ajax/jabatan', [Jabatan::class, 'ajax']);


// $routes->get('api/jabatan', '\App\API\Jabatan::index');

$routes->group('api', ['namespace' => 'App\Controllers\API', 'filter' => 'rest-api'], function ($routes) {
    $routes->get('jabatan', 'Jabatan::index');
    $routes->post('jabatan', 'Jabatan::create');
    $routes->put('jabatan/(:num)', 'Jabatan::update/$1');
    $routes->delete('jabatan/(:num)', 'Jabatan::delete/$1');
});
