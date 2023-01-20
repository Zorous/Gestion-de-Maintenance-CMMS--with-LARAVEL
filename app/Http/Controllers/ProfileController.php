<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        // return view("services.profil.index");
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

     public function show($id)
    {
        $user = User::find($id);
        return view("services.profil.index",["profile"=>$user]);

    }
    public function edit($id)
    {
        $user = User::find($id);

        return view("services.profil.update",["profile"=>$user]);
    }


    public function update(Request $request, $id)
    {
        $Profile = User::find($id);

        $Profile->name = $request->input("name");
        $Profile->email = $request->input("email");
        $Profile->password = $request->input("password");

              //Image Treatment
              if ($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . "." . $extension;
                $file->move('uploads/profil_imgs', $filename);
                $Profile->image = $filename;
            } else {
                // return $request;
                $Profile->image = "";
            }
        // dd($Profile);
            $Profile->update();
            return redirect('services/profil/'.$id);

    }
    public function destroy($id)
    {
        //
    }
}
