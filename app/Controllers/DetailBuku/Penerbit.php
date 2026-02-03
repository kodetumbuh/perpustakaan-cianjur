<?php

namespace App\Controllers\DetailBuku;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use \Hermawan\DataTables\DataTable;

class Penerbit extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        return view('detail_buku/penerbit');
    }


    public function json()
    {
        $db = db_connect();
        
        // 1. Pilih tabel dan kolom yang ingin ditampilkan
        $builder = $db->table('penerbit')
                      ->select('id_penerbit, nama_penerbit, alamat, kota, no_telepon, email');


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
        return view("detail_buku/penerbit_create");
    }

    public function store()
    {
        $penerbitModel = new \App\Models\PenerbitModel();

        $data = [
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email'     => $this->request->getPost('email'),
        ];

        $penerbitModel->insert($data);

        return redirect()->to('admin/detail-buku/penerbit')
            ->with('success', 'Penerbit berhasil disimpan');
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id_penerbit = null)
    {
        $model = new \App\Models\PenerbitModel();

        $penerbit = $model->find($id_penerbit);

        if (! $penerbit) {
            return redirect()->back()->with('error', 'Data penerbit tidak ditemukan');
        }

        return view('detail_buku/penerbit_edit', [
            'penerbit' => $penerbit
        ]);
    }

    /**
     * Add or update a model resource, from "posted" properties.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id_penerbit = null)
    {
        $model = new \App\Models\PenerbitModel();

        if (! $model->find($id_penerbit)) {
            return redirect()->back()->with('error', 'Data Penerbit tidak ditemukan');
        }

        $model->update($id_penerbit, [
            'nama_penerbit' => $this->request->getPost('nama_penerbit'),
            'alamat' => $this->request->getPost('alamat'),
            'kota' => $this->request->getPost('kota'),
            'no_telepon' => $this->request->getPost('no_telepon'),
            'email'     => $this->request->getPost('email'),
        ]);

        return redirect()->to('admin/detail-buku/penerbit')
            ->with('success', 'Kategori berhasil diperbarui');
    }


    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id_penerbit = null)
    {
        $penerbitModel = new \App\Models\PenerbitModel();

        if ($this->request->isAJAX()) {
            if ($penerbitModel->delete($id_penerbit)) {
                return $this->response->setJSON([
                    'status' => true,
                    'message' => 'Penerbit berhasil dihapus'
                ]);
            } else {
                return $this->response->setJSON([
                    'status' => false,
                    'message' => 'Gagal menghapus Penerbit'
                ]);
            }
        }

        $penerbitModel->delete($id_penerbit);

        return redirect()->back()->with('success', 'Penerbit berhasil dihapus');
    }
}
