<?php namespace App\Models;

use CodeIgniter\Model;

class jobs extends Model {
    protected $table = 'jobs';
    protected $allowedFields = ['id', 'title', 'price', 'time_needed', 'job_description'];

    public function getJobs() {
        return $this->findAll();
    }
}

class bookings extends Model {
    protected $table = 'bookings';
    protected $allowedFields = ['bookingID', 'jobID', 'bookingDate', 'bookingTime'];

    public function getBookings(array $dateArray) {
        return $this->where('bookingDate', $dateArray[4]."-". $dateArray[3] ."-".$dateArray[2])->find();
    }

    public function insertData(array $data) {
        $this->insert($data);
    }
}

?>