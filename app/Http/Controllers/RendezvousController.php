<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\rendezvousControllerform_rendezvous;
use App\Models\rendezvous;

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
        return view('rendezvous');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_rendezvous(Request $request)
    {
        return view('ajout_rendezvous');
    }

    /**
     * Display the specified resource.
     */
    public function insertrendezvous(Request $request)
    { 
        $request->validate([

        'libelle'=>'required',
        'date_rdv'=>'required',

    ]);
    
    $rendezvous = new rendezvous();
    $rendezvous->libelle = $request->libelle;
    $rendezvous->date_rdv = $request->date_rdv;

    return redirect('ajout_rendezvous')->with('status', 'Le rendez-vous a été ajouté avec succes.');
    
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
