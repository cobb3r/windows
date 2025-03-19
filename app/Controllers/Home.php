<?php

namespace App\Controllers;

use App\Models\jobs;
use App\Models\bookings;

class Home extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('index');
        echo view('templates/footer');
    }

    public function about() {
        echo view('templates/header');
        echo view('about');
        echo view('templates/footer');
    }

    public function services() {
        $model = new jobs();
        $data['jobs'] = $model->getJobs();

        echo view('templates/header');
        echo view('services', $data);
        echo view('templates/footer');
    }

    public function booking() {
        echo view('templates/header');
        echo view('booking');
        echo view('templates/footer');
    }

    public function availability() {
        $uri = service('uri');$dateArray = ($uri->getSegments());

        $model = new jobs();
        $bookings = new bookings();
        $data = [
            'jobs' => $model->getJobs(),
            'bookings' => $bookings->getBookings($dateArray)
        ];

        echo view('templates/header');
        echo view('availability', $data);
        echo view('templates/footer');
    }

    public function bookNow() {
        $uri = service('uri');$dateArray = ($uri->getSegments());

        $model = new jobs();
        $data['jobs'] = $model->getJobs();

        echo view('templates/header');
        echo view('bookNow', $data);
        echo view('templates/footer');
    }

    public function success() {
        $uri = service('uri');$dateArray = ($uri->getSegments());

        print_r($dateArray);

        $data = [
            'jobID' => $dateArray[1],
            'bookingDate' => $dateArray[2],
            'bookingTime' => $dateArray[3]
        ];

        $model = new jobs();
        $bookings = new bookings();
        
        $bookings->insertData($data);
        
        echo view('templates/header');
        echo view('success');
        echo view('templates/footer');
    }
}