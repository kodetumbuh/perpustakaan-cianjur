<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRak extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_rak' => ['type'=>'INT','auto_increment'=>true],
            'kode_rak' => ['type'=>'VARCHAR','constraint'=>10,'unique'=>true],
            'lokasi' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
            'kapasitas' => ['type'=>'INT','null'=>true],
            'status' => [
                'type'=>'ENUM',
                'constraint'=>['tersedia','penuh'],
                'default'=>'tersedia'
            ],
        ]);

        $this->forge->addKey('id_rak', true);
        $this->forge->createTable('rak');
    }

    public function down()
    {
        $this->forge->dropTable('rak');
    }
}