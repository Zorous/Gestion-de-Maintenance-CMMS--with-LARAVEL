<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Etablissement;

class EtablissementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
    {
        $this->middleware('auth');

        $Etablissements = Etablissement::all();
        return view("services.etablissements.index",["etabs"=>$Etablissements]);
    }

    public function create()
    {
        return view('services.etablissements.create');
    }


    public function store(Request $request)
    {
        $Etablissement = new Etablissement;

        $Etablissement->raison_social = $request->input("raison-social");
        $Etablissement->adresse = $request->input("adresse");
        $Etablissement->telephone = $request->input("tele");
        $Etablissement->responsable = $request->input("responsable");

        $Etablissement->save();

        return redirect('services/etablissements');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $Etablissement = Etablissement::find($id);
        return view("services/etablissements/update",["id"=>$id,"etab"=>$Etablissement]);

    }

    public function update(Request $request, $id)
    {
        $Etab = Etablissement::find($id);
if(isset($Etab)){
        $Etab->raison_social = $request->input("raison-social");
        $Etab->adresse = $request->input("adresse");
        $Etab->telephone = $request->input("tele");
        $Etab->responsable = $request->input("responsable");
        $Etab->update();
        return redirect('/services/etablissements');

}

else{
echo "error";

}


    }


    public function destroy($id)
    {
        $Etablissement = Etablissement::find($id);
        $Etablissement->delete();

        return redirect('/services/etablissements');



    }
}
