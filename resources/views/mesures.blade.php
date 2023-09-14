@extends('layouts.mainlayout')

@section('content')

<body style="background-color: #0BE0FD">
    <div class="container mt-3">
        
        <a href="{{ route('form_mesures') }}"class="btn btn-danger">Nouveau+</a>


      <div style="text-align: center mt-3">
        <h4>LISTE DES MESURES</h4>
           </div>

        <section>
            
          <table class="table table-bordered">
            
           <tbody>
            
                <tr>
                 
                  <td>Numero</td>
                  <td>Poitrine</td>
                  <td>Taille-robe</td>
                  <td>Bassins</td>
                  <td>Longueur</td>
                  <td>Genoux</td>
                  <td>Manches</td>
                  <td>Hanches</td>
                  <td>Epaules</td>
                   <td>Poignets</td>
                   <td>Tour-ventre</td>
                   <td>Longueur-veste</td>
                   <td>Date-mesure</td>
                   <td>Nom du Client</td>
                   <td>Nom du Modèle</td>
                   <td>Actions</td>
            
            </tr>
              </tbody> 

              <tbody>
                @foreach ($mesures as $mesu)
                    <tr>
                        <td>{{ $mesu->id }}</td>
                        <td>{{ $mesu->poitrine }}</td>
                        <td>{{ $mesu->taille_robe }}</td>
                        <td>{{ $mesu->bassins }}</td>
                        <td>{{ $mesu->longueur }}</td>
                        <td>{{ $mesu->genoux }}</td>
                        <td>{{ $mesu->manches }}</td>
                        <td>{{ $mesu->hanches }}</td>
                        <td>{{ $mesu->epaules }}</td>
                        <td>{{ $mesu->poignets }}</td>
                        <td>{{ $mesu->tour_ventre }}</td>
                        <td>{{ $mesu->longueur_veste }}</td>
                        <td>{{ $mesu->date_ }}</td>
                        <td>{{ $mesu->Client->nom }} {{ $mesu->Client->prenom }} </td>
                        <td>{{ $mesu->Modele->nom_modele}}</td>
                       <td>
                        <a href="#"{{ $mesu->id }} class="btn btn-info">Modifier</a>
                          <a href="#"{{ $mesu->id }} class="btn btn-danger">supprimer</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
  
       

















             </table>

            

        
      </section>   


       
         
     



    </div>
@endsection
