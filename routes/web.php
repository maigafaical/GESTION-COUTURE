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



Route::post('/ajout_clients_traitement',[ClientsController::class, 'form_clients']);


Route::get('modeles',[ModelesController::class, 'modeles'])->name('modeles');


Route::get('mesures',[MesuresController::class, 'mesures'])->name('mesures');

Route::get('personnels',[PersonnelsController::class, 'personnels'])->name('personnels');

Route::get('depenses',[DepensesController::class, 'depenses'])->name('depenses');

Route::get('coutures',[CouturesController::class, 'coutures'])->name('coutures');

Route::get('paiements',[PaiementsController::class, 'paiements'])->name('paiements');

Route::get('rendezvous',[RendezvousController::class, 'rendezvous'])->name('rendezvous');















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
