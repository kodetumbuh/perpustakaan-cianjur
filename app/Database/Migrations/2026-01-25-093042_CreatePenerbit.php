<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenerbit extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penerbit' => ['type'=>'INT','auto_increment'=>true],
            'nama_penerbit' => ['type'=>'VARCHAR','constraint'=>100],
            'alamat' => ['type'=>'TEXT','null'=>true],
            'kota' => ['type'=>'VARCHAR','constraint'=>50,'null'=>true],
            'no_telepon' => ['type'=>'VARCHAR','constraint'=>15,'null'=>true],
            'email' => ['type'=>'VARCHAR','constraint'=>100,'null'=>true],
        ]);

        $this->forge->addKey('id_penerbit', true);
        $this->forge->createTable('penerbit');
    }

    public function down()
    {
        $this->forge->dropTable('penerbit');
    }
}