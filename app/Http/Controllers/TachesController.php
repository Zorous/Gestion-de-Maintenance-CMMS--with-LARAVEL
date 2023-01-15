<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tache;

class TachesController extends Controller
{

    public function index()
    {
        $taches = Tache::all();
        return view("services.taches.index",["taches"=>$taches]);
    }


    public function create()
    {
        //
        return view("services.taches.create");
    }


    public function store(Request $request)
    {
        //
        $Taches = new Tache;

        $Taches->description = $request->input("description");
        $Taches->date = $request->input("date");
        $Taches->duree = $request->input("duree");

        $Taches->save();

        return redirect('services/taches');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
