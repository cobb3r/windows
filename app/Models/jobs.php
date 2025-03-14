<?php namespace App\Models;

use CodeIgniter\Model;

class jobs extends Model {
    protected $table = 'jobs';
    protected $allowedFields = ['id', 'title', 'price', 'time_needed', 'job_description'];

    public function getJobs() {
        return $this->findAll();
    }
}

?>