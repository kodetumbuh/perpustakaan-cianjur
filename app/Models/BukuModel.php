<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table      = 'buku';
    protected $primaryKey = 'id_buku';
    protected $allowedFields = ['stok_tersedia', 'stok_total', 'status'];

    // Pengganti sp_update_stok_peminjaman
    public function kurangiStok(int $idBuku, int $qty)
    {
        return $this->db->table($this->table)
            ->where('id_buku', $idBuku)
            ->where('stok_tersedia >=', $qty)
            ->set('stok_tersedia', "stok_tersedia - $qty", false)
            ->update();
    }
}