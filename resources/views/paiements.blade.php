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
                <td>montant</td>
                <td>date_depot</td>
                <td>date_recuperation</td>
                
              

                
              </tr>
            </tbody>
             
            
           
    
   @endsection