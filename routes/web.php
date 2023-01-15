<?php

use App\Http\Controllers\EquipmentsController;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\StaticController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TachesController;


Route::view("/","welcome");
Route::view("/about","about");


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


//CREATE
Route::post('/services/taches/store',[TachesController::class,"store"]);

//READ
Route::resource('/services/taches',TachesController::class);









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [App\Http\Controllers\ServicesController::class, 'index'])->name('home');


Route::group(array('before' =>'auth'), function()
{
Route::get('/services',[ServicesController::class, 'index']);
});

