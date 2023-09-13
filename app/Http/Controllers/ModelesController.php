<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ModelesControllerform_modeles;
use App\Models\Modeles;
class ModelesController extends Controller
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
    public function modeles()
    {
        $modeles = Modeles::all();
        return view('modeles', compact('modeles'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function form_modeles(Request $request)
    {
        return view('ajout_modeles');
    }

    /**
     * Display the specified resource.
     */
    public function insertmodeles(Request $request)
    {
    $request->validate([

        'nom_modele'=>'required',
        'type_modele'=>'required',
        'image'=>'required',
    ]);    
     $modeles = new Modeles();
     $modeles->nom_modele = $request->nom_modele;
     $modeles->type_modele = $request->type_modele;
     $modeles->image= $request->image->store('photo', 'public');
     $modeles->save();

    return redirect('listemodeles')->with('status', 'Le modele a été ajouté avec succes.');
  
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
