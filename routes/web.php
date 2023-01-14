<?php

use App\Http\Controllers\EquipmentsController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StaticController;
use App\Http\Controllers\EtablissementController;


Route::view("/","welcome");
Route::view("/about","about");


Route::view("/services","services.index");

//CREATE
Route::post('/services/etablissements/store',[EtablissementController::class,"store"]);

//READ
Route::resource('/services/etablissements',EtablissementController::class);


//UPDATE
Route::get('/etablissements/edit/{id}',[EtablissementController::class,"edit"]);
Route::put('/services/etablissements/update/{id}',[EtablissementController::class,"update"]);


//DELETE
Route::get('/etablissements/delete/{id}',[EtablissementController::class,"destroy"]);





