<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/testmongo', 'TestMongo::index');
$routes->get('/produk', 'Produk::index');
$routes->get('/produk/tambah', 'Produk::tambah');
$routes->post('/produk/simpan', 'Produk::simpan');

$routes->get('/produk/edit/(:any)', 'Produk::edit/$1');
$routes->post('/produk/update/(:any)', 'Produk::update/$1');
$routes->get('/produk/hapus/(:any)', 'Produk::hapus/$1');