@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">


    <div style="text-align: center">
        <h1>LISTE DES DEPENSES </h1>
           </div>

           <a href="{{ route('form_depenses') }}"class="btn btn-danger">Nouveau+</a>


    <section class="contenair mt-2">
        <table class="table table-bordered">

         <tbody>
              <tr>
                <td>Numéro</td>
                <td>Libelle</td>
                <td>Montant</td>
                <td>Date</td>
                <td>Nom du personnel</td>
                <td>Actions</td>
              

                
              </tr>
            </tbody>
             
            
            @foreach ($depenses as $depens)
                        <tr>
                            <td>{{ $depens->id }}</td>
                            <td>{{ $depens->libelle }}</td>
                            <td>{{ $depens->montant }}</td>
                            <td>{{ $depens->date }}</td>
                            <td>{{ $depens->Personnel->nom }} {{ $depens->Personnel->prenom }}</td>
                           
                            <td>
                            <a href="#"{{ $depens->id }} class="btn btn-info">Modifier</a>
                            <a href="#"{{ $depens->id }} class="btn btn-danger">supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
    
   @endsection