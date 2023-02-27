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
        $tech = DB::table('techniciens')->join('specialites', "specialites.id", "=", "techniciens.specialite_id")->join('users', "users.id", "=", "techniciens.user_id")->get();
        // dd($tech);
        return view('services.techniciens.index', ["techniciens" => $tech]);
    }


    public function create()
    {
        $specialites = Specialite::all();
        $users = User::where('status', "=", 0)->get();
        return view('services.techniciens.create', compact('specialites', 'users'));
    }

    public function store(Request $request)
    {
        $Technicien = new Technicien;



        $Technicien->telephone = $request->input('tele');
        $Technicien->specialite_id = $request->input('specialites');
        $Technicien->user_id = $request->input('user_id');
        //Image Treatment
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = time() . "." . $fileExtension;
            $file->move("uploads/techniciens_imgs", $fileName);
            $image = $fileName;
        } else {
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
        $specialites = Specialite::all();
        //pipelin test ;3
        $techniciens = DB::table('techniciens')->join('specialites', "specialites.id", "=", "techniciens.specialite_id")->join('users', "users.id", "=", "techniciens.user_id")->where("users.id","=",$id)->first();
        // return($techniciens);
        return view('services.techniciens.update',compact('id','techniciens','specialites'));
    }


    public function update(Request $request, $id)
    {       
        $tech = Technicien::where("techniciens.user_id","=",$id)->first();

        $request->validate(
            [
                "tele" => "required",
                "image" => "image|mimes:jpg,png,jpeg,gif,svg|max:2048"
            ]
        );
        if ($request->has('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . "." . $extension;
            $file->move('uploads/techniciens_imgs', $filename);
            $request->image = $filename;
            DB::table('users')->whereId($tech->user_id)->update([
                "image" => $request->image,
            ]);
        }
        else{
            $request->image = $tech->image;
        }


        $tech->telephone = $request->input("tele");
        $tech->specialite_id =$request->input("specialites");
        
 


        $tech->update();
        return redirect()->route('techniciens.index')->with("l'element a éte modifié avec succéss");

    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (file_exists(public_path("uploads/techniciens_imgs/$user->image"))) {
            unlink(public_path("uploads/techniciens_imgs/$user->image"));
        } else {
            dd('File does not exists.');
        }
        $user->delete();
        return view('services.techniciens.index')->with("l'element a éte supprimer avec succéss");


    }
}
