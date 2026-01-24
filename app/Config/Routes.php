<?php

use CodeIgniter\Router\RouteCollection;

// halaman landing public
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// routes dashboard admin
$routes->group('admin', function ($routes) {
    $routes->get('dashboard', 'MenuUtama\Dashboard::index');

    // Detail Buku
    $routes->get('detail-buku/buku', 'DetailBuku\Buku::index');
    $routes->get('detail-buku/kategori', 'DetailBuku\Dashboard::index');
    $routes->get('detail-buku/buku/penerbit', 'DetailBuku\Dashboard::index');
    $routes->get('detail-buku/buku/pengarang', 'DetailBuku\Dashboard::index');


    // Peminjaman & Pengembalian
    $routes->get('peminjaman-pengembalian/peminjaman', 'DetailBuku\Buku::index');
    $routes->get('peminjaman-pengembalian/peninjaman-detail', 'DetailBuku\Dashboard::index');
    $routes->get('peminjaman-pengembalian/pengembalian', 'DetailBuku\Dashboard::index');
    $routes->get('peminjaman-pengembalian/reservasi', 'DetailBuku\Dashboard::index');

    // Penyimpanan
    $routes->get('peyimpanan/rak-buku', 'Penyimpanan\Dashboard::index');

    // Pengaturan Pengguna
    $routes->get('pengaturan-pengguna/anggota', 'Penyimpanan\Dashboard::index');
    $routes->get('pengaturan-pengguna/user', 'Penyimpanan\Dashboard::index');

});