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

    { $mesures= Mesures::all();
        return view('mesures', compact('mesures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // ...

    public function form_mesures(Request $request)
    {
        return view('ajout_mesures');
    }


   // ...

   public function  insertmesures(Request $request)


   {
    $request->validate([

      
        'poitrine',
        'taille_robe',
        'bassins',
        'longueur',
        'genoux',
        'manches',
        'hanches',
        'epaules',
        'poignets',
        'tour_ventre',
        'longueur_veste',
        'date_',
        'clients_id',
        
    ]);

    $mesures = new Mesures();
  
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
    $mesures->date_= $request->date_;
    $mesures->clients_id= $request->clients_id;

    $mesures->save();

    return redirect('listemesures')->with('status', 'Les mesures ont été ajouté avec succes.');

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
