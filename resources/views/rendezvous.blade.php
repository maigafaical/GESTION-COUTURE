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
                
                <td>Libelle</td>
                <td>Date_rdv</td>
                
              

                
              </tr>
            </tbody>
             
            
           
    
   @endsection