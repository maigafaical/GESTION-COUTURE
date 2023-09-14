@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">


    <div style="text-align: center">
        <h1>LISTE DES PAIEMENTS </h1>
           </div>

           <a href="{{ route('form_paiements') }}"class="btn btn-danger">Nouveau+</a>


    <section class="contenair mt-2">
        <table class="table table-bordered">

         <tbody>
              <tr>
                <td>Numero</td>
                <td>Montant</td>
                <td>Acompte</td>
                <td>Reste</td>
                <td>Mode de paiements</td>
                <td>Date de paiements</td>
                <td>Informations</td>
                <td>Actions</td>

              

                
              </tr>
            </tbody>


            <tbody>
              @foreach ($paiements as $pai)
                  <tr>
                      <td>{{ $pai->id }}</td>
                      <td>{{ $pai->montant }}</td>
                      <td>{{ $pai->acompte }}</td>
                      <td>{{ $pai->reste }}</td>
                      <td>{{ $pai->mode_paiement }}</td>
                      <td>{{ $pai->date_paiement }}</td>
                      <td>{{ $pai->Couture->description}}-</td>
                      <td>
                        <a href="#"{{ $pai->id }} class="btn btn-info">Modifier</a>
                        <a href="#"{{ $pai->id }} class="btn btn-danger">supprimer</a>
                      </td>
                  </tr>
              @endforeach
            </tbody>
             
            
           
    
   @endsection