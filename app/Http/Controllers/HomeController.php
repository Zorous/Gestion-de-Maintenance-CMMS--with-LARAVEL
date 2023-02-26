<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Tache;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        // $activites = Activite::all();
        // $taches = Tache::;
        return view('home');
    }
}
