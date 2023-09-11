@extends('layouts.mainlayout')
@section('content')
<body style="background-color: #0BE0FD">


        <div class="text-dark text-center">
            <h3>LISTE DES PERSONNELS </h3>
               </div>
               <a href="{{ route('form_personnels') }}"class="btn btn-danger">Nouveau+</a>


        <section class="contenair mt-1">
          <table class="table table-bordered">

           <tbody>
                <tr>
                 
                  <td>nom</td>
                  <td>prenom</td>
                  <td>adresse</td>
                  <td>telephone</td>
                  <td>poste</td>
                   


                </tr>
              </tbody> 
             
            
            
           
          </table>
      </section>   
   




  


        
    @endsection