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
                 
                  <td>poitrine</td>
                  <td>taille_robe</td>
                  <td>bassins</td>
                  <td>longueur</td>
                  <td>genoux</td>
                  <td>manches</td>
                  <td>hanches</td>
                  <td>epaules</td>
                   <td>poignets</td>
                   <td>tour_ventre</td>
                   <td>longueur_veste</td>
                   <td>date_mesure</td>
            
            </tr>
              </tbody> 
             </table>

            

        
      </section>   


       
         
     



    </div>
@endsection
