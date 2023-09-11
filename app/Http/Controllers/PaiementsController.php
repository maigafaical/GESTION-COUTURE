<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaiementsController extends Controller
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
    public function paiements()
    {
        return view('paiements');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_paiements(Request $request)
    {
        return view('ajout_paiements');
    }

    /**
     * Display the specified resource.
     */
    public function insertionpaiments(Request $request)
    {
        $request->validate([

            'montant'=>'required',
            'date_depot'=>'required',
            'date_recuperation'=>'required',
         
           
        ]);

        $paiements = new paiements();
        $paiements->montant = $request->montant;
        $paiements->date_depot = $request->date_depot;
        $paiements->date_recuperation = $request->date_recuperation;
       $paiements->save();

       return redirect('ajout_depenses')->with('status', 'Le paiement a été ajouté avec succes.');
    

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
