<?php

use CodeIgniter\Router\RouteCollection;

// halaman landing public
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

// routes dashboard admin
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'MenuUtama\Dashboard::index');

    // route buku
    $routes->get('detail-buku/buku', 'DetailBuku\Buku::index');
    $routes->get('detail-buku/buku/json', 'DetailBuku\Buku::json');
    $routes->get('detail-buku/buku/create', 'DetailBuku\Buku::create');
    $routes->post('detail-buku/buku/post', 'DetailBuku\Buku::store');
    $routes->get('detail-buku/buku/delete/(:num)', 'DetailBuku\Buku::delete/$1');
    $routes->get('detail-buku/buku/edit/(:num)', 'DetailBuku\Buku::edit/$1');
    $routes->post('detail-buku/buku/update/(:num)', 'DetailBuku\Buku::update/$1');

    // route kategori
    $routes->get('detail-buku/kategori', 'DetailBuku\Kategori::index');
    $routes->get('detail-buku/kategori/json', 'DetailBuku\Kategori::json');
    $routes->get('detail-buku/kategori/create', 'DetailBuku\Kategori::create');
    $routes->post('detail-buku/kategori/post', 'DetailBuku\Kategori::store');
    $routes->get('detail-buku/kategori/delete/(:num)', 'DetailBuku\Kategori::delete/$1');
    $routes->get('detail-buku/kategori/edit/(:num)', 'DetailBuku\Kategori::edit/$1');
    $routes->post('detail-buku/kategori/update/(:num)', 'DetailBuku\Kategori::update/$1');


    // route penerbit
    $routes->get('detail-buku/penerbit', 'DetailBuku\Penerbit::index');
    $routes->get('detail-buku/penerbit/json', 'DetailBuku\Penerbit::json');
    $routes->get('detail-buku/penerbit/create', 'DetailBuku\Penerbit::create');
    $routes->post('detail-buku/penerbit/store', 'DetailBuku\Penerbit::store');
    $routes->get('detail-buku/penerbit/delete/(:num)', 'DetailBuku\Penerbit::delete/$1');
    $routes->get('detail-buku/penerbit/edit/(:num)', 'DetailBuku\Penerbit::edit/$1');
    $routes->post('detail-buku/penerbit/update/(:num)', 'DetailBuku\Penerbit::update/$1');


    // route pengarang
    $routes->get('detail-buku/pengarang', 'DetailBuku\Pengarang::index');
    $routes->get('detail-buku/pengarang/json', 'DetailBuku\Pengarang::json');
    $routes->get('detail-buku/pengarang/create', 'DetailBuku\Pengarang::create');
    $routes->post('detail-buku/pengarang/store', 'DetailBuku\Pengarang::store');
    $routes->get('detail-buku/pengarang/delete/(:num)', 'DetailBuku\Pengarang::delete/$1');
    $routes->get('detail-buku/pengarang/edit/(:num)', 'DetailBuku\Pengarang::edit/$1');
    $routes->post('detail-buku/pengarang/update/(:num)', 'DetailBuku\Pengarang::update/$1');





    // Peminjaman & Pengembalian
    $routes->get('peminjaman-pengembalian/peminjaman', 'PeminjamanPengembalian\Peminjaman::index');
    $routes->get('peminjaman-pengembalian/peminjaman/json', 'PeminjamanPengembalian\Peminjaman::json');

    
    $routes->get('peminjaman-pengembalian/peminjaman-detail', 'PeminjamanPengembalian\PeminjamanDetail::index');
    $routes->get('peminjaman-pengembalian/pengembalian', 'PeminjamanPengembalian\Pengembalian::index');
    $routes->get('peminjaman-pengembalian/reservasi', 'PeminjamanPengembalian\Reservasi::index');

    // Penyimpanan
    $routes->get('peyimpanan/rak-buku', 'Penyimpanan\RakBuku::index');

    // Pengaturan Pengguna
    $routes->get('pengaturan-pengguna/anggota', 'PengaturanPengguna\Anggota::index');
    $routes->get('pengaturan-pengguna/user', 'PengaturanPengguna\User::index');

});

// routes dashboard admin
$routes->group('anggota', function ($routes) {
    $routes->get('dashboard', 'MenuUtama\AnggotaDashboard::index');
});

