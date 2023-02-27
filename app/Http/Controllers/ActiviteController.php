<?php

namespace App\Http\Controllers;

use App\Models\Activite;
use App\Models\Tache;
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
        $activites  = DB::table('activites')->join('taches', "taches.id", "=","activites.tache_id")->join('techniciens','techniciens.id','=','activites.technicien_id')->join('etats','etats.id','=','activites.etat_id')->get();

        return view('services.activite.index',compact('activites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::where('status', "=", 0)->get();
        $taches = Tache::all();
        return view('services.activite.create',compact('users','taches'));
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
        


        $activite->description = $request->description;
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
        return redirect()->route("activite.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
