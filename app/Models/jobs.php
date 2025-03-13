<?php namespace App\Models;

use CodeIgniter\Model;

class jobs extends Model {
    protected $table = 'jobs';
    protected $allowedFields = ['id', 'title', 'price'];

    public function getJobs() {
        return $this->findAll();
    }
}

?>