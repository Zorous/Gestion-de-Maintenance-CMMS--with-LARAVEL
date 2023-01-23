<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Technicien;
use Illuminate\Http\Request;
use App\Models\Specialite;

use Illuminate\Support\Facades\DB;

class TechnicienController extends Controller
{

    public function index()
    {
        //Normal user verification
        // $User = DB::table('users')->where('status', "=", 0)->get();
        // dd($User);

        $tech = DB::table('techniciens')->join('specialites', "specialites.id", "=", "techniciens.specialite_id")->get();
        // dd($tech);
        return view('services.techniciens.index', ["techniciens" => $tech]);
    }


    public function create()
    {
        $specialites = Specialite::all();
        return view('services.techniciens.create', ["specialites" => $specialites]);
    }

    public function store(Request $request)
    {
        $Technicien = new Technicien;

        $Technicien->nom = $request->input('nom');
        $Technicien->prenom = $request->input('prenom');
        $Technicien->telephone = $request->input('tele');
        $Technicien->email = $request->input('email');
        $Technicien->specialite_id = $request->input('specialites');
     //Image Treatment
     if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = time() . "." . $fileExtension;
        $file->move("uploads/techniciens_imgs",$fileName);
        $Technicien->image = $fileName;
    }else {
        $Technicien->image = "default.png";
    }

        $Technicien->save();

        return redirect("services/techniciens");
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
