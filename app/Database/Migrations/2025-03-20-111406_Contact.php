<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contact extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'contactID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'bookingID' => [
                'type' => 'INT',
            ],
            'firstName' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'lastName' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '40',
            ],
            'address' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'postCode' => [
                'type' => 'VARCHAR',
                'constraint' => '10',
            ],
        ]);

        $this->forge->addPrimaryKey('contactID');
        $this->forge->addForeignKey('bookingID', 'bookings', 'bookingID');
        $this->forge->createTable('Contact');
    }

    public function down()
    {
        $this->forge->dropTable('Contact');
    }
}
