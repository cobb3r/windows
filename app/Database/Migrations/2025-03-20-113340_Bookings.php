<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Bookings extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'bookingID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'jobID' => [
                'type' => 'INT',
            ],
            'bookingDate' => [
                'type' => 'DATE',
            ],
            'bookingTime' => [
                'type' => 'TIME',
            ],
        ]);

        $this->forge->addPrimaryKey('bookingID');
        $this->forge->addForeignKey('jobID', 'jobs', 'id');
        $this->forge->createTable('Bookings');
    }

    public function down()
    {
        $this->forge->dropTable('Bookings');
    }
}
