<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePengarang extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_pengarang' => ['type'=>'INT','auto_increment'=>true],
            'nama_pengarang' => ['type'=>'VARCHAR','constraint'=>150],
            'negara' => ['type'=>'VARCHAR','constraint'=>50,'null'=>true],
            'biografi' => ['type'=>'TEXT','null'=>true],
            'tgl_lahir' => ['type'=>'DATE','null'=>true],
        ]);

        $this->forge->addKey('id_pengarang', true);
        $this->forge->createTable('pengarang');
    }

    public function down()
    {
        $this->forge->dropTable('pengarang');
    }
}