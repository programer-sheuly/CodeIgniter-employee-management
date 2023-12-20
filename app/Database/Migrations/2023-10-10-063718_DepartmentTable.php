<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DepartmentTable extends Migration
{
    public function up()
    { $this->forge->addField([
        'dep_id' => [
            'type'           => 'INT',
            'constraint'     => 5,
            'unsigned'       => true,
            'auto_increment' => true,
        ],
        'dep_name' => [
            'type'       => 'VARCHAR',
            'constraint' => '100',
        ],
        
    ]);
    $this->forge->addKey('dep_id', true);
    $this->forge->createTable('department');
    }

    public function down()
    {
        //
    }
}
