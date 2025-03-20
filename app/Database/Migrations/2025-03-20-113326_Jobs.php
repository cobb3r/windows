<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jobs extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '30',
            ],
            'price' => [
                'type' => 'INT',
            ],
            'time_needed' => [
                'type' => 'DECIMAL',
                'constraint' => '4,2',
            ],
            'job_description' => [
                'type' => 'TEXT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('Jobs');
    }

    public function down()
    {
        $this->forge->dropTable('Jobs');
    }
}
