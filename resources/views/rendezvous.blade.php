@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">


    <div style="text-align: center">
        <h1>LISTE DES RENDEZ-VOUS </h1>
           </div>

           <a href="{{ route('form_rendezvous') }}"class="btn btn-danger">Nouveau+</a>


    <section class="contenair mt-2">
        <table class="table table-bordered">

         <tbody>
              <tr>
                <td>Numéro</td>
                <td>Libelle</td>
                <td>Date du rendez-vous</td>
                <td>Nom du client</td>
                <td>Actions</td>
              

                
              </tr>
            </tbody>


            <tbody>
              @foreach ($rendezvous as $rdv)
                  <tr>
                      <td>{{ $rdv->id }}</td>
                      <td>{{ $rdv->libelle }}</td>
                      <td>{{ $rdv->date_rdv }}</td>
                      <td>{{ $rdv->client->nom ?? 'MAIGA' }} {{ $rdv->client->prenom ??'FAICAL' }}</td>
                     <td>
                      <a href="#"{{ $rdv->id }} class="btn btn-info">Modifier</a>
                        <a href="#"{{ $rdv->id }} class="btn btn-danger">supprimer</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>

      </table>
  </section>

             
            
           
    
   @endsection