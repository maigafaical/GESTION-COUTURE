<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CouturesControllerform_coutures;
use App\Models\Coutures;

class CouturesController extends Controller
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
    public function coutures()
    {
        $coutures = Coutures::all();
        return view('coutures', compact('coutures'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_coutures(Request $request)
    {   
        return view('ajout_coutures');
    }

    /**
     * Display the specified resource.
     */
    public function insertcoutures(Request $request)
    {
        $request->validate([

            'montant'=>'required',
            'date_depot'=>'required',
            'date_recuperation'=>'required',
        ]);
    
        $coutures = new Coutures();
        $coutures->montant = $request->montant;
        $coutures->date_depot = $request->date_depot;
        $coutures->date_recuperation = $request->date_recuperation;
        $coutures->save();
    
        return redirect('listecoutures')->with('status', 'une couture a été ajouté avec succes.');


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
