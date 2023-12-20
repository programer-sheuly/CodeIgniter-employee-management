<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEmployeeTable extends Migration
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
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'department' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'address' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'gander' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'marital_status' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'date_Of_Joining' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'staff_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Staff');
    }

    public function down()
    {
        //
    }
}
