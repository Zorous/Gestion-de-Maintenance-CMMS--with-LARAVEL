<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('check_login');
    }



    public function index()
    {
        $this->middleware('check_login');
        return view('services.index');
    }
}

