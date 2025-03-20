<?php

namespace App\Controllers;

use App\Models\jobs;
use App\Models\bookings;
use App\Models\contact;

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
        helper(['form']);
        $uri = service('uri');$dateArray = ($uri->getSegments());

        $model = new jobs();
        $bookings = new bookings();
        $contact = new contact();

        $data = [
            'jobID' => $dateArray[1],
            'bookingDate' => $dateArray[2],
            'bookingTime' => $dateArray[3]
        ];

        $bookings->insertData($data);
        $bookingID = $bookings->getID($data);

        $contactData = [
            'bookingID' => $bookingID['bookingID'],
            'firstName' => $_POST['fName'],
            'lastName' => $_POST['lName'],	
            'email' => $_POST['email'],	
            'address' => $_POST['address'], 	
            'postCode' => $_POST['postCode']
        ];
        
        $contact->insertData($contactData);
        
        echo view('templates/header');
        echo view('success');
        echo view('templates/footer'); 
    }
}