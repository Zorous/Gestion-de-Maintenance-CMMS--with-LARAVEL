<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Service;
use Illuminate\Http\Request;

use App\Models\Equipement;

use Illuminate\Support\Facades\DB;

class EquipementsController extends Controller
{

    public function index()
    {
        // $equipments = Equipement::with('category')->get();
        // $categories = Categorie::with('equipments')->get();
        // return view('services.equipments.index', compact('equipments','categories'));

        //SELECT * FROM category,equipement WHERE categorie
        $equipments= DB::table('equipements')->join('categories', 'categories.id', "=", "equipements.categorie_id")->get();
        return view('services.equipments.index',compact("equipments"));
    }

    public function create()
    {
        $categories = Categorie::all();
        $services = Service::all();

        return view('services.equipments.create', ["categories" => $categories, "services" => $services]);
    }

    public function description($id){

        $equipment = Equipement::find($id);

        $categorie = Categorie::where("id","=",$equipment->categorie_id);
        $service = Service::where("id","=",$equipment->service_id);

        // return($categorie);

       return view('services.equipments.details',compact('equipment','categorie','service'));
    }


    public function store(Request $request)
    {
        $Equipement = new Equipement;

        $Equipement->description = $request->input("description");
        $Equipement->designation = $request->input("designation");
        $Equipement->reference = $request->input("reference");
        $Equipement->date_debut = $request->input("date");
        $Equipement->prix = $request->input("prix");
        $Equipement->marque = $request->input("marque");
        $Equipement->categorie_id = $request->input("category");
        $Equipement->service_id = $request->input("service");
        $Equipement->piece_de_rechange = $request->input("piece_de_rechange");

        //Image Treatment
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/equipements_imgs', $filename);
            $Equipement->image = $filename;
        } else {
            // return $request;
            $Equipement->image = "";
        }

        //Document treatment

        if ($request->hasFile('doc')) {
            $Docfile = $request->file('doc');
            $Docextension = $Docfile->getClientOriginalExtension();
            $Docfilename = time() . "." . $Docextension;
            $Docfile->move('uploads/equipements_docs', $Docfilename);
            $Equipement->document = $Docfilename;
        } else {
            // return $request;
            $Equipement->document = "";
        }

        $my_checkbox_value = $request['piece_rechange'];

        if ($my_checkbox_value == 1) {
            //checked
            $Equipement->piece_de_rechange = 1;

        } else {
            //unchecked
            $Equipement->piece_de_rechange = 0;

        }


        // dd($Equipement);

        $Equipement->save();
        return redirect('services/equipements');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $categories = Categorie::all();
        $services = Service::all();

        $equipement = Equipement::find($id);

        // dd($equipement);

        return view(
            'services.equipments.update',
            [
                "id" => $id,
                "equipement" => $equipement,
                "categories" => $categories,
                "services" => $services
            ]
        );
    }

    public function update(Request $request, $id)
    {
        $Equipement = Equipement;

        $Equipement->description = $request->input("description");
        $Equipement->designation = $request->input("designation");
        $Equipement->reference = $request->input("reference");
        $Equipement->date_debut = $request->input("date");
        $Equipement->prix = $request->input("prix");
        $Equipement->marque = $request->input("marque");
        $Equipement->categorie_id = $request->input("category");
        $Equipement->service_id = $request->input("service");
        $Equipement->piece_de_rechange = $request->input("piece_de_rechange");

        //Image Treatment
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/equipements_imgs', $filename);
            $Equipement->image = $filename;
        } else {
            // return $request;
            $Equipement->image = "";
        }

        //Document treatment

        if ($request->hasFile('doc')) {
            $Docfile = $request->file('doc');
            $Docextension = $Docfile->getClientOriginalExtension();
            $Docfilename = time() . "." . $Docextension;
            $Docfile->move('uploads/equipements_docs', $Docfilename);
            $Equipement->document = $Docfilename;
        } else {
            // return $request;
            $Equipement->document = "";
        }

        $my_checkbox_value = $request['piece_rechange'];

        if ($my_checkbox_value == 1) {
            //checked
            $Equipement->piece_de_rechange = 1;

        } else {
            //unchecked
            $Equipement->piece_de_rechange = 0;

        }

        $Equipement->update();
        return redirect('services/equipements');









    }

    public function destroy($id)
    {

        $Equipement = Equipement::find($id);
        // dd($Equipement);
        $Equipement->delete();

        return redirect('services/equipments');
    }
}
