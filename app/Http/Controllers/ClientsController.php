<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\ClientsControllerform_clients;



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

public function store(Request $request)
{
    $client = new Client;
    $client->nom = $request->input('nom');
    $client->prenom = $request->input('prenom');
    $client->email = $request->input('adresse');
    $client->email = $request->input('telephone');
    
    // Ajoutez d'autres champs si nécessaire
    
    $client->save();

    // Redirigez l'utilisateur ou effectuez une action appropriée après l'enregistrement.
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
