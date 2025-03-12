<?php

namespace App\Controllers;

use App\Models\jobs;

class Home extends BaseController
{
    public function index()
    {
        $model = new jobs();

        return view('index');
    }
}
