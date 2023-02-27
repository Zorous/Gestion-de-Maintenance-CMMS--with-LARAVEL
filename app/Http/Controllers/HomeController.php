<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Tache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    // //Method 2 To check the if the user is authentificated or not.
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        // $activites = Activite::all();
        // $taches = Tache::;
        
        return view('home');
    }

    public function details($id)
    {
        // $taches = DB::table('taches')->where("taches.id", "=", $id)->get();
        $taches = DB::table('activites')->join('taches', "taches.id", "=","activites.tache_id")->join('etats','etats.id','=','activites.etat_id')->where('activites.technicien_id',"=",$id)->get();
        // return $activites;
        return view("details",compact('taches'));
    }
}
