@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">


    <div style="text-align: center">
        <h1>LISTE DES COUTURES </h1>
           </div>

           <a href="{{ route('form_coutures') }}"class="btn btn-danger">Nouveau+</a>


    <section class="contenair mt-2">
        <table class="table table-bordered">

         <tbody>
              <tr>
                <td>Numero</td>
                <td>Description</td>
                <td>Date depot</td>
                <td>Date recuperation</td>
                <td>Modele</td>
                <td>Client</td>
                <td>Actions</td>
                </tr>
            </tbody>

            <tbody>
              @foreach ($coutures as $cou)
                  <tr>
                    <td>{{ $cou->id }}</td>
                    <td>{{ $cou->description}}</td>
                    <td>{{ $cou->date_depot }}</td>
                    <td>{{ $cou->date_recuperation }}</td>
                    <td>{{ $cou->Modele->nom_modele }}</td>  
                    <td>{{ $cou->Client->nom }} {{ $cou->Client->prenom }}</td>
                      <td>
                      <a href="#"{{ $cou->id }} class="btn btn-info">Modifier</a>
                      <a href="#"{{ $cou->id }} class="btn btn-danger">supprimer</a>
                      </td>
                  </tr>
              @endforeach
          </tbody>

          </table>
             
            
           
    
   @endsection