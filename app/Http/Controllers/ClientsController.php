<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClientsControllerform_clients;
use App\Models\Clients;



class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function clients()
    {
        return view('clients');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_clients(Request $request)
    {
        return view('ajout_clients');
    }

   // ...
   public function  insertion_clients_traitement(Request $request)

   {
    $request->validate([

        'nom'=>'required',
        'prenom'=>'required',
        'adresse'=>'required',
        'telephone'=>'required',
        
    ]);

    $clients = new Clients();
    $clients->nom = $request->nom;
    $clients->prenom = $request->prenom;
    $clients->adresse = $request->adresse;
    $clients->telephone = $request->telephone;
    $clients->save();

    return redirect('ajout_clients')->with('status', 'Le client a été ajouté avec succes.');

}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
