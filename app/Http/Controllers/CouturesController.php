<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CouturesController;
use App\Models\Coutures;
use App\Models\Modeles;
use App\Models\Clients;
use Illuminate\Http\Request;

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
        $modele = Modeles::all();
        $client = Clients::all();
        return view('ajout_coutures', compact('modele', 'client'));
    }

    /**
     * Display the specified resource.
     */
    public function insertcoutures(Request $request)
    {
        $request->validate([

            'description'=>'required',
            'date_depot'=>'required',
            'date_recuperation'=>'required',
            'clients_id'=>'required',
            'modeles_id'=>'required',
            'users_id'=>'required',
        ]);
    
        $coutures = new Coutures();
        $coutures->description= $request->description;
        $coutures->date_depot = $request->date_depot;
        $coutures->date_recuperation = $request->date_recuperation;
        $coutures->clients_id = $request->clients_id;
        $coutures->modeles_id = $request->modeles_id;
        $coutures->users_id = $request->users_id;
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
