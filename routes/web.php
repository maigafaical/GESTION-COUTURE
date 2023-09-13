<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\MesuresController;
use App\Http\Controllers\ModelesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CouturesController;
use App\Http\Controllers\DepensesController;
use App\Http\Controllers\PaiementsController;
use App\Http\Controllers\PersonnelsController;
use App\Http\Controllers\RendezvousController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[PageController::class,'index']);

Route::get('clients',[ClientsController::class, 'clients'])->name('clients');

Route::get('ajout_clients',[ClientsController::class, 'form_clients'])->name('form_clients');

Route::post('insertion_clients',[ClientsController::class, 'insertion_clients_traitement']);




Route::get('listemodeles',[ModelesController::class, 'modeles'])->name('modeles');
Route::get('ajout_modeles',[ModelesController::class, 'form_modeles'])->name('form_modeles');
Route::post('insertionmodeles',[ModelesController::class, 'insertmodeles']);




Route::get('listemesures',[MesuresController::class, 'mesures'])->name('mesures');
Route::get('ajout_mesures',[MesuresController::class, 'form_mesures'])->name('form_mesures');
Route::post('insertionmesures',[MesuresController::class, 'insertmesures']);





Route::get('personnels',[PersonnelsController::class, 'personnels'])->name('personnels');
Route::get('ajout_personnels',[PersonnelsController::class, 'form_personnels'])->name('form_personnels');
Route::post('insertpersonnels',[PersonnelsController::class, 'insertpersonnels']);




Route::get('depenses',[DepensesController::class, 'depenses'])->name('depenses');
Route::get('ajout_depenses',[DepensesController::class, 'form_depenses'])->name('form_depenses');
Route::post('insertdepenses',[DepensesController::class, 'insertdepenses']);


Route::get('listecoutures',[CouturesController::class, 'coutures'])->name('coutures');
Route::get('coutures',[CouturesController::class, 'form_coutures'])->name('form_coutures');
Route::post('insertioncoutures',[CouturesController::class, 'insertcoutures']);



Route::get('listepaiements',[PaiementsController::class, 'paiements'])->name('paiements');
Route::get('paiements',[PaiementsController::class, 'form_paiements'])->name('form_paiements');
Route::post('insertionpaiements',[PaiementsController::class, 'insertpaiements']);








Route::get('listerendezvous',[RendezvousController::class, 'rendezvous'])->name('rendezvous');
Route::get('ajout_rendezvous',[RendezvousController::class, 'form_rendezvous'])->name('form_rendezvous');
Route::post('insertrendezvous',[RendezvousController::class, 'insertrendezvous']);









Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
