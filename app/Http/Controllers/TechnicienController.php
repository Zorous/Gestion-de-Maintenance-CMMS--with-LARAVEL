<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Technicien;
use App\Models\User;
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

        $tech = DB::table('techniciens')->join('specialites', "specialites.id", "=", "techniciens.specialite_id")->join('users', "users.id", "=", "techniciens.user_id")->get();
        // dd($tech);
        return view('services.techniciens.index', ["techniciens" => $tech]);
    }


    public function create()
    {
        $specialites = Specialite::all();
        $users = User::where('status',"=",0)->get();
        return view('services.techniciens.create',compact('specialites','users'));
    }

    public function store(Request $request)
    {
        $Technicien = new Technicien;

   

        $Technicien->telephone = $request->input('tele');
        $Technicien->specialite_id = $request->input('specialites');
        $Technicien->user_id = $request->input('specialites');
     //Image Treatment
     if ($request->hasFile('image')) {
        $file = $request->file('image');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = time() . "." . $fileExtension;
        $file->move("uploads/techniciens_imgs",$fileName);
        $image = $fileName;
    }else {
        $image = "default.png";
    }

    DB::table('users')->whereId($Technicien->user_id)->update([
"image" => $image,
    ]);

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
