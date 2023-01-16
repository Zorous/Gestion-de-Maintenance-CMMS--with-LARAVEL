<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tache;

class TachesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {

        $this->middleware('auth');

        $tache = Tache::all();
        return view("services.taches.index",["taches"=>$tache]);
    }


    public function create()
    {
        //
        return view("services.taches.create");
    }


    public function store(Request $request)
    {
        //
        $tache = new Tache;

        $tache->description = $request->input("description");
        $tache->date = $request->input("date");
        $tache->duree = $request->input("duree");

        $tache->save();

        return redirect('services/taches');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tache = Tache::find($id);

        return view('services.taches.update',['tache'=>$tache,"id"=>$id]);
    }

    public function update(Request $request, $id)
    {
        $tache = Tache::find($id);

        $tache->description = $request->input("description");
        $tache->date = $request->input("date");
        $tache->duree = $request->input("duree");


        $tache->save();

        return redirect('services/taches');
      }


    public function destroy($id)
    {
        $tache = Tache::find($id);

        $tache->delete();

        return redirect('services/taches');
    }
}
