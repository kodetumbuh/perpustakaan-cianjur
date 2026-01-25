<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePeminjaman extends Migration
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

            'id_user' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true, // 🔥 HARUS ADA
            ],

            'tanggal_pinjam' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('id', true);

        // FK ke users (Shield)
        $this->forge->addForeignKey(
            'id_user',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('peminjaman');
    }

    public function down()
    {
        $this->forge->dropTable('peminjaman');
    }
}