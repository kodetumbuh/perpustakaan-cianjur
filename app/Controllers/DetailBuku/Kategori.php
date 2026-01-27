<?php

namespace App\Controllers\DetailBuku;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class Kategori extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return view('detail_buku/kategori');
    }


    public function json()
    {
        $db = db_connect();
        
        // 1. Pilih tabel dan kolom yang ingin ditampilkan
        $builder = $db->table('kategori')
                      ->select('id_kategori, kode_kategori, nama_kategori, deskripsi');


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
        return view("detail_buku/kategori_create");
    }

    public function store()
    {
        $kategoriModel = new \App\Models\KategoriModel();

        $data = [
            'kode_kategori' => $this->request->getPost('kode_kategori'),
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
        ];

        $kategoriModel->insert($data);

        return redirect()->to('admin/detail-buku/kategori')
            ->with('success', 'Kategori berhasil disimpan');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id_kategori = null)
    {
        $model = new \App\Models\KategoriModel();

        $kategori = $model->find($id_kategori);

        if (! $kategori) {
            return redirect()->back()->with('error', 'Data kategori tidak ditemukan');
        }

        return view('detail_buku/kategori_edit', [
            'kategori' => $kategori
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id_kategori = null)
    {
        $model = new \App\Models\KategoriModel();

        if (! $model->find($id_kategori)) {
            return redirect()->back()->with('error', 'Data kategori tidak ditemukan');
        }

        $model->update($id_kategori, [
            'kode_kategori' => $this->request->getPost('kode_kategori'),
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi'),
        ]);

        return redirect()->to('admin/detail-buku/kategori')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id_kategori = null)
    {
        $kategoriModel = new \App\Models\KategoriModel();


        $kategoriModel->delete($id_kategori);


        return redirect()->back()->with('success', 'Kategori berhasil dihapus');
    }
}
