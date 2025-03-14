<?php

namespace App\Controllers;

use App\Models\jobs;

class Home extends BaseController
{
    public function index()
    {
        $model = new jobs();

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
        $model = new jobs();
        $data['jobs'] = $model->getJobs();

        echo view('templates/header');
        echo view('availability', $data);
        echo view('templates/footer');
    }
}