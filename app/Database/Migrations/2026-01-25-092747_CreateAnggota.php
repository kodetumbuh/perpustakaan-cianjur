<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAnggota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_anggota' => [
                'type' => 'INT',
                'auto_increment' => true,
            ],
            'no_anggota' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'unique' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
            ],
            'jenis_kelamin' => [
                'type' => 'ENUM',
                'constraint' => ['L','P'],
                'null' => true,
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true,
            ],
            'tanggal_lahir' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'no_telepon' => [
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'no_identitas' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
                'null' => true,
                'unique' => true,
            ],
            'tgl_daftar' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'tgl_expired' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'status' => [
                'type' => 'ENUM',
                'constraint' => ['aktif','nonaktif'],
                'default' => 'aktif',
            ],
        ]);

        $this->forge->addKey('id_anggota', true);
        $this->forge->addKey('nama');
        $this->forge->addKey('status');

        $this->forge->createTable('anggota');
    }

    public function down()
    {
        $this->forge->dropTable('anggota');
    }
}