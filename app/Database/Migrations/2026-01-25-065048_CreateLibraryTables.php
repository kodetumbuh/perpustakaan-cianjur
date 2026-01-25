<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLibraryTables extends Migration
{
    public function up()
    {
        // 1. KATEGORI
        $this->forge->addField([
            'id_kategori'    => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'kode_kategori'  => ['type' => 'VARCHAR', 'constraint' => 10, 'unique' => true],
            'nama_kategori'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'deskripsi'      => ['type' => 'TEXT', 'null' => true],
        ]);
        $this->forge->addKey('id_kategori', true);
        $this->forge->createTable('kategori');

        // 2. RAK
        $this->forge->addField([
            'id_rak'    => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'kode_rak'  => ['type' => 'VARCHAR', 'constraint' => 10, 'unique' => true],
            'lokasi'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'status'    => ['type' => 'ENUM', 'constraint' => ['tersedia', 'penuh'], 'default' => 'tersedia'],
        ]);
        $this->forge->addKey('id_rak', true);
        $this->forge->createTable('rak');

        // 3. PENGARANG & PENERBIT (Singkatnya sama seperti SQL Anda)
        // ... buat tabel pengarang dan penerbit di sini ...

        // 4. BUKU
        $this->forge->addField([
            'id_buku'        => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'isbn'           => ['type' => 'VARCHAR', 'constraint' => 20, 'unique' => true],
            'judul'          => ['type' => 'VARCHAR', 'constraint' => 200],
            'id_kategori'    => ['type' => 'INT', 'constraint' => 11],
            'stok_total'     => ['type' => 'INT', 'default' => 0],
            'stok_tersedia'  => ['type' => 'INT', 'default' => 0],
            'status'         => ['type' => 'ENUM', 'constraint' => ['tersedia', 'rusak', 'hilang'], 'default' => 'tersedia'],
        ]);
        $this->forge->addKey('id_buku', true);
        $this->forge->addForeignKey('id_kategori', 'kategori', 'id_kategori', 'CASCADE', 'CASCADE');
        $this->forge->createTable('buku');

        // 5. PEMINJAMAN (Terhubung ke Shield Users)
        $this->forge->addField([
            'id_peminjaman'  => ['type' => 'INT', 'constraint' => 11, 'auto_increment' => true],
            'no_peminjaman'  => ['type' => 'VARCHAR', 'constraint' => 30, 'unique' => true],
            'id_user'        => ['type' => 'INT', 'unsigned' => true, 'null' => true], // Foreign key ke users Shield
            'tgl_pinjam'     => ['type' => 'DATE'],
            'status'         => ['type' => 'ENUM', 'constraint' => ['dipinjam', 'kembali'], 'default' => 'dipinjam'],
        ]);
        $this->forge->addKey('id_peminjaman', true);
        // Penting: Hubungkan ke tabel 'users' milik Shield
        $this->forge->addForeignKey('id_user', 'users', 'id', 'SET NULL', 'CASCADE');
        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
        $this->forge->dropTable('buku');
        $this->forge->dropTable('rak');
        $this->forge->dropTable('kategori');
    }
}