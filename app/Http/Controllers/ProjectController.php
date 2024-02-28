<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('layouts.projects');
    }

    public function show()
    {
        return view('layouts.project_details');
    }
}
