<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Etat;
use App\Models\Tache;
use App\Models\Technicien;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class ActiviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $activites = Activite::all();
        $activites  = DB::table('activites')
        ->join('etats','etats.id','=','activites.etat_id')
        ->join('techniciens','techniciens.id','=','activites.technicien_id')
        ->join('taches', "taches.id", "=","activites.tache_id")
        ->select('etats.*', 'taches.*','techniciens.*','activites.*')
        ->get();
        // return($activites);

        return view('services.activite.index',compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $taches = Tache::all();
        $techniciens = DB::table('techniciens')
        ->join('users','users.id','=','techniciens.user_id')
        ->select('users.*', 'techniciens.*')
        ->get();


        // return $techniciens;
        return view('services.activite.create',compact('techniciens','taches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $request->validate(
            [
                "description" => "required",
                "duree" => "required",
                "technicien_id" => "required",
                "date" => "required",
                "tache_id" => "required",
            ]
        );
        // dd('here');
        $activite = new Activite;



        $activite->description_activite = $request->description;
        $activite->duree = $request->duree;
        $activite->technicien_id = $request->technicien_id;
        $activite->date = $request->date;
        $activite->tache_id = $request->tache_id;


        $activite->save();

        // Activite::create(
        //    [ "description" => $request->description,
        //     "duree" => $request->duree,
        //     "technicien_id " => $request->technicien_id ,
        //     "date" => $request->date
        //     ]
        // );
        return redirect()->route("activites.index")->with('success',"l'element a éte ajouter avec succées");
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $taches = Tache::all();
        $etats = Etat::all();
        $techniciens = DB::table('techniciens')
        ->join('users','users.id','=','techniciens.user_id')
        ->select('users.*', 'techniciens.*')
        ->get();

        $activite  = DB::table('activites')
        ->join('techniciens','techniciens.id','=','activites.technicien_id')
        ->join('taches', "taches.id", "=","activites.tache_id")
        ->where('activites.id',"=",$id)
        ->select('taches.*','techniciens.*','activites.*')
        ->first();

        $technicien = DB::table('techniciens')
        ->join('users','users.id','=','techniciens.user_id')
        ->select('users.*', 'techniciens.*')
        ->where('techniciens.user_id','=',$id)
        ->first();
        // return $technicien;
        return view("services.activite.update",compact('id','taches','technicien','techniciens','etats',"activite"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                "description" => "required",
                "duree" => "required",
                "technicien_id" => "required",
                "date" => "required",
                "tache_id" => "required",
            ]
        );
        $activite = Activite::find($id);

        $activite->description_activite = $request->description;
        $activite->duree = $request->duree;
        $activite->technicien_id = $request->technicien_id;
        $activite->date = $request->date;
        $activite->tache_id = $request->tache_id;
        $activite->etat_id = $request->etat_id;

        $activite->update();
        return redirect()->route("activites.index")->with('success',"l'element a éte modifié avec succées");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activite = Activite::find($id);
        $activite->delete();

        return redirect()->route("activites.index")->with('success',"l'element a éte supprimer avec succées");



    }
}
