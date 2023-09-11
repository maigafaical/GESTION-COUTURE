<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller\MesuresControllerform_Mesures;
use App\Models\Mesures;

class MesuresController extends Controller
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
    public function mesures()
    {
        return view('mesures');
    }

    /**
     * Store a newly created resource in storage.
     */
    // ...
   public function  insertmesures(Request $request)

   {
    $request->validate([

      
        'poitrine'=>'required',
        'taille_robe'=>'required',
        'bassins'=>'required',
        'longueur'=>'required',
        'genoux'=>'required',
        'manches'=>'required',
        'hanches'=>'required',
        'epaules'=>'required',
        'poignets'=>'required',
        'tour_ventre'=>'required',
        'longueur_veste'=>'required',
        'date'=>'required',
        
    ]);

    $mesures = new mesures();
  
    $mesures->poitrine = $request->poitrine;
    $mesures->taille_robe= $request->taille_robe;
    $mesures->bassins= $request->bassins;
    $mesures->longueur= $request->longueur;
    $mesures->genoux= $request->genoux;
    $mesures->manches= $request->manches;
    $mesures->hanches= $request->hanches;
    $mesures->epaules= $request->epaules;
    $mesures->poignets= $request->poignets;
    $mesures->tour_ventre= $request->tour_ventre;
    $mesures->longueur_veste= $request->longueur_veste;
    $mesures->date= $request->date;


    $mesures->save();

    return redirect('ajout_mesures')->with('status', 'Les mesures ont été ajouté avec succes.');

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
