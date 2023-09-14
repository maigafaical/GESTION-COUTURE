<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\depensesController;
use App\Models\depenses;
use App\Models\Personnels;


class DepensesController extends Controller
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
    public function depenses()
    {
        $depenses = Depenses::all();
        return view('depenses', compact('depenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_depenses(Request $request)
    {
        $personnels= Personnels::all();
        return view('ajout_depenses' , compact('personnels'));
    }


    /**
     * Display the specified resource.
     */
    public function insertdepenses(Request $request)
    {
    $request->validate([

            'libelle'=>'required',
            'montant'=>'required',
            'date'=>'required',
            'personnels_id'=>'required',
         
           
        ]);

        $depenses = new depenses();
        $depenses->libelle = $request->libelle;
        $depenses->montant = $request->montant;
        $depenses->date = $request->date;
        $depenses->personnels_id = $request->personnels_id;
       $depenses->save();

       return redirect('depenses')->with('status', 'La dépense a été ajouté avec succes.');
    
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
