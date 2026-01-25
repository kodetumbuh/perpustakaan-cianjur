<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKategori extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kategori' => ['type'=>'INT','auto_increment'=>true],
            'kode_kategori' => ['type'=>'VARCHAR','constraint'=>10,'unique'=>true],
            'nama_kategori' => ['type'=>'VARCHAR','constraint'=>100],
            'deskripsi' => ['type'=>'TEXT','null'=>true],
        ]);

        $this->forge->addKey('id_kategori', true);
        $this->forge->addKey('nama_kategori');
        $this->forge->createTable('kategori');
    }

    public function down()
    {
        $this->forge->dropTable('kategori');
    }
}