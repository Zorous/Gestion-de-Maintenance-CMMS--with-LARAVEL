<?php

use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CalendersController;
use App\Http\Controllers\EmailController;
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




//__________________________PROFILE_________________________________

Route::get('/profile/{id}',[ProfileController::class,"show"]);
Route::get('/profile/{id}/edit',[ProfileController::class,"edit"]);

Route::put('/services/profile/update/{id}',[ProfileController::class,"update"]);

Auth::routes();


Route::group(array('before' =>["check_login",'auth']), function()
{
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/activite_details/{id}', [App\Http\Controllers\HomeController::class, 'details'])->name('activite.details');

});

//____________________________________________Taches_______________________________________________

Route::prefix('services')->middleware(['auth', 'check_login'])->group(function () {

//Index (Dashboard)
Route::get('/',[ServicesController::class,'index']);

//Taches
Route::resource('taches',TachesController::class);

//Equipements
Route::resource('equipements',EquipementsController::class);
Route::get('/equipements/details/{id}',[EquipementsController::class,"description"])->name('equipements.details');

//Etablissements
Route::resource('etablissements',EtablissementController::class);

//Techniciens
Route::resource('techniciens',TechnicienController::class);
//Techniciens
Route::resource('activites',ActiviteController::class);

//Calender
Route::resource('calender',CalendersController::class);

});

//Mailing
Route::get('/services/technicien/mailForm/{id}',[EmailController::class,"mailForm"]);
Route::get('/services/technicien/sendMail',[EmailController::class,"sendMail"]);






Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
