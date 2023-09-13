<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\personnelsControllerform_personnels;
use App\Models\personnels;

class PersonnelsController extends Controller
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
    public function personnels()
    {
        $personnels = Personnels::all();
        return view('personnels', compact('personnels'));
}

    /**
     * Store a newly created resource in storage.
     */
    public function form_personnels(Request $request)
    {
        return view('ajout_personnels');
    }

    /**
     * Display the specified resource.
     */
    public function insertpersonnels(Request $request)
    {
        $request->validate([

            'nom'=>'required',
            'prenom'=>'required',
            'adresse'=>'required',
            'telephone'=>'required',
            'poste'=>'required',
            
        ]);
    
        $personnels = new personnels();
        $personnels->nom = $request->nom;
        $personnels->prenom = $request->prenom;
        $personnels->adresse = $request->adresse;
        $personnels->telephone = $request->telephone;
        $personnels->poste = $request->poste;
        $personnels->save();
    
        return redirect('personnels')->with('status', 'Le personnel a été ajouté avec succes.');
    
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
