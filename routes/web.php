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
// Route::get('/home', [App\Http\Controllers\ServicesController::class, 'index'])->name('home');


Route::group(array('before' =>["check_login",'auth']), function()
{
Route::get('/services',[ServicesController::class, 'index']);

//____________________________________________Etablissements_______________________________________________
//CREATE
Route::post('/services/etablissements/store',[EtablissementController::class,"store"]);

//READ
Route::resource('/services/etablissements',EtablissementController::class);


//UPDATE
Route::get('/etablissements/edit/{id}',[EtablissementController::class,"edit"]);
Route::put('/services/etablissements/update/{id}',[EtablissementController::class,"update"]);


//DELETE
Route::get('/etablissements/delete/{id}',[EtablissementController::class,"destroy"]);



//____________________________________________Taches_______________________________________________

Route::prefix('services')->middleware(['auth', 'check_login'])->group(function () {
Route::resource('taches',TachesController::class);

});


//READ

/* //CREATE
Route::post('/services/taches/store',[TachesController::class,"store"]);
//UPDATE
Route::get('/taches/edit/{id}',[TachesController::class,"edit"]);
Route::put('/services/taches/update/{id}',[TachesController::class,"update"]);

//DELETE
Route::get('/taches/delete/{id}',[TachesController::class,"destroy"]);*/
});


//____________________________________________Equipements_______________________________________________


//CREATE
Route::post('/services/equipements/store',[EquipementsController::class,"store"]);

//READ
Route::resource('/services/equipements',EquipementsController::class);
//UPDATE
Route::get('/services/equipements/edit/{id}',[EquipementsController::class,"edit"]);
Route::put('/services/equipements/update/{id}',[EquipementsController::class,"update"]);

//DELETE
Route::get('/services/equipements/delete/{id}',[EquipementsController::class,"destroy"]);




//_________________________________Techniciens_______________________________

// Route::resource('/services/techniciens',::class);
