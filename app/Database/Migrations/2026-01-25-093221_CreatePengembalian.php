<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengembalian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'id_peminjaman' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'tanggal_kembali' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);

        // FK ke peminjaman.id
        $this->forge->addForeignKey(
            'id_peminjaman',
            'peminjaman',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('pengembalian');
    }

    public function down()
    {
        $this->forge->dropTable('pengembalian');
    }
}