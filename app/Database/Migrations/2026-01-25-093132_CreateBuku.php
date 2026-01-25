<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_buku' => ['type'=>'INT','auto_increment'=>true],
            'isbn' => ['type'=>'VARCHAR','constraint'=>20,'null'=>true,'unique'=>true],
            'judul' => ['type'=>'VARCHAR','constraint'=>200],
            'id_pengarang' => ['type'=>'INT'],
            'id_penerbit' => ['type'=>'INT'],
            'id_kategori' => ['type'=>'INT'],
            'id_rak' => ['type'=>'INT','null'=>true],
            'stok_total' => ['type'=>'INT','default'=>0],
            'stok_tersedia' => ['type'=>'INT','default'=>0],
            'harga' => ['type'=>'DECIMAL','constraint'=>'10,2','null'=>true],
            'status' => [
                'type'=>'ENUM',
                'constraint'=>['tersedia','rusak','hilang'],
                'default'=>'tersedia'
            ],
        ]);

        $this->forge->addKey('id_buku', true);
        $this->forge->addForeignKey('id_pengarang','pengarang','id_pengarang','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_penerbit','penerbit','id_penerbit','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_kategori','kategori','id_kategori','CASCADE','CASCADE');
        $this->forge->addForeignKey('id_rak','rak','id_rak','CASCADE','CASCADE');

        $this->forge->createTable('buku');
    }

    public function down()
    {
        $this->forge->dropTable('buku');
    }
}