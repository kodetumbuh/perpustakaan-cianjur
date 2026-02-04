<?php

namespace App\Controllers\PeminjamanPengembalian;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class Peminjaman extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return view('peminjaman_pengembalian/peminjaman');
    }

    
    public function json()
    {
        $db = db_connect();
        
        // 1. Pilih tabel dan kolom yang ingin ditampilkan
        $builder = $db->table('peminjaman')
                      ->select('id_peminjaman, no_peminjaman, id_anggota, id_user, nama_peminjam, tgl_peminjaman, tgl_kembali_rencana , tgl_kembali_aktual, denda, jumlah_buku_pinjam, status');


        return DataTable::of($builder)
            ->toJson(true);
    }


    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters.
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
