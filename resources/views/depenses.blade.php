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
                
                <td>Libelle</td>
                <td>Montant</td>
                <td>Date</td>
                
              

                
              </tr>
            </tbody>
             
            
           
    
   @endsection