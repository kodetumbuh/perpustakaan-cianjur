<?php

namespace App\Controllers\DetailBuku;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class Buku extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return view('detail_buku/buku');
    }


    
    public function json()
    {
        $db = db_connect();
    
        // Inisialisasi builder pada tabel utama 'buku'
        $builder = $db->table('buku')
        ->select('
            buku.id_buku, 
            buku.judul, 
            buku.isbn, 
            pengarang.nama_pengarang, 
            penerbit.nama_penerbit, 
            penerbit.no_telepon, 
            penerbit.email, 
            rak.kode_rak, 
            rak.lokasi, 
            buku.tahun_terbit, 
            buku.stok_tersedia, 
            buku.harga
        ')
        // Melakukan Join ke tabel terkait
        ->join('pengarang', 'pengarang.id_pengarang = buku.id_pengarang', 'left')
        ->join('penerbit', 'penerbit.id_penerbit = buku.id_penerbit', 'left')
        ->join('rak', 'rak.id_rak = buku.id_rak', 'left');

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
