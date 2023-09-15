<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RendezvousControllerform_rendezvous;
use App\Models\Rendezvou;
use App\Models\Clients;


class RendezvousController extends Controller
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
    public function rendezvous()
    {
        $rendezvous = rendezvou::all();
        return view('rendezvous', compact('rendezvous'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function form_rendezvous(Request $request)
    {   
        $client = Clients::all();
        return view('ajout_rendezvous', compact('client'));
    }

    /**
     * Display the specified resource.
     */
    public function insertrendezvous(Request $request)
    { 
        $request->validate([

        'libelle'=>'required',
        'date_rdv'=>'required',
        'clients_id'=>'required',

    ]);
    
    $rendezvous = new rendezvou();
    $rendezvous->libelle = $request->libelle;
    $rendezvous->date_rdv = $request->date_rdv;
    $rendezvous->clients_id = $request->clients_id;

    $rendezvous->save();

    return redirect('listerendezvous')->with('status', 'Le rendez-vous a été ajouté avec succes.');
    
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
