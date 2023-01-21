<?php

use App\Http\Controllers\EquipementsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TechnicienController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtablissementController;
// use App\Http\Controllers\StaticController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TachesController;


Route::view("/","welcome");
Route::view("/about","about");

Route::resource('/technicien',TechnicienController::class);



//__________________________PROFILE_________________________________

Route::get('/profile/{id}',[ProfileController::class,"show"]);
Route::get('/profile/{id}/edit',[ProfileController::class,"edit"]);

Route::put('/services/profile/update/{id}',[ProfileController::class,"update"]);







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* Route::group(array('before' =>["check_login",'auth']), function()
{
Route::get('/services',[ServicesController::class, 'index']);

//____________________________________________Etablissements_______________________________________________
/* //CREATE
Route::post('/services/etablissements/store',[EtablissementController::class,"store"]);

//READ
Route::resource('/services/etablissements',EtablissementController::class);


//UPDATE
Route::get('/etablissements/edit/{id}',[EtablissementController::class,"edit"]);
Route::put('/services/etablissements/update/{id}',[EtablissementController::class,"update"]);


//DELETE
Route::get('/etablissements/delete/{id}',[EtablissementController::class,"destroy"]);



}); */
//____________________________________________Taches_______________________________________________

Route::prefix('services')->middleware(['auth', 'check_login'])->group(function () {

//Taches
Route::resource('taches',TachesController::class);

//Equipements
Route::resource('equipements',EquipementsController::class);

//Etablissements
Route::resource('etablissements',EtablissementController::class);

});

