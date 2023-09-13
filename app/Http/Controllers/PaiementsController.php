<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaiementsControllerform_paiements;
use App\Models\Paiements;

class PaiementsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function paiements()
    {
        $paiements = Paiements::all();
        return view('paiements', compact('paiements'));
}

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function form_paiements(Request $request)
    {
        return view('ajout_paiements');
    }

    public function insertpaiements(Request $request)
     
    {
        $request->validate([

            'montant'=>'required',
            'acompte'=>'required',
            'reste'=>'required',
            'mode_paiement'=>'required',
            'date_paiement'=>'required',
           
        ]);

        $paiements = new paiements();
        $paiements->montant = $request->montant;
        $paiements->acompte = $request->acompte;
        $paiements->reste = $request->acompte;
        $paiements->mode_paiement = $request->mode_paiement;
        $paiements->date_paiement = $request->date_paiement;
       $paiements->save();

       return redirect('listepaiements')->with('status', 'Le paiement a été ajouté avec succes.');
    
        

    /**
     * Display the specified resource.
     */
      
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
