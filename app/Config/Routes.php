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
$routes->post('admin/karyawan', [Karyawan::class, 'create']);


$routes->get('admin/jabatan', [Jabatan::class, 'index']);

// $routes->get('karyawan', [Coba::class, 'index']);
// $routes->post('karyawan', [Coba::class, 'create']);