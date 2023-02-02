<?php

namespace App\Http\Controllers;

use App\Models\Equipement;

use App\Models\Etablissement;
use App\Models\Tache;
use App\Models\Technicien;
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
        $Count_Equipement = Equipement::count();
        $Count_Taches= Tache::count();
        $Count_Etablissement= Etablissement::count();
        $Count_Techniciens= Technicien::count();

        // dd($Equipement);
        $this->middleware('check_login');
        return view('services.index',
    [
        'Count_Equipement'=>$Count_Equipement,
        'Count_Taches'=>$Count_Taches,
        'Count_Etablissement'=>$Count_Etablissement,
        'Count_Techniciens'=>$Count_Techniciens,

    ]);
    }
}

