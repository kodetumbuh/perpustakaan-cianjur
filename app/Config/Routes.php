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

    // Detail Buku
    $routes->get('detail-buku/buku', 'DetailBuku\Buku::index');
    $routes->get('detail-buku/kategori', 'DetailBuku\Kategori::index');

    $routes->get('detail-buku/kategori/json', 'DetailBuku\Kategori::json');

    $routes->get('detail-buku/kategori/create', 'DetailBuku\Kategori::create');
    $routes->post('detail-buku/kategori/post', 'DetailBuku\Kategori::store');
    $routes->get('detail-buku/kategori/delete/(:num)', 'DetailBuku\Kategori::delete/$1');


    $routes->get('detail-buku/kategori/edit/(:num)', 'DetailBuku\Kategori::edit/$1');
    $routes->post('detail-buku/kategori/update/(:num)', 'DetailBuku\Kategori::update/$1');



    $routes->get('detail-buku/penerbit', 'DetailBuku\Penerbit::index');
    $routes->get('detail-buku/pengarang', 'DetailBuku\Pengarang::index');


    // Peminjaman & Pengembalian
    $routes->get('peminjaman-pengembalian/peminjaman', 'PeminjamanPengembalian\Peminjaman::index');
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

