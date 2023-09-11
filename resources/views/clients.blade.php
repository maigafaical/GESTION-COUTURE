@extends('layouts.mainlayout')

@section('content')

<body style="background-color: #0BE0FD">

  <a href="{{ route('form_clients') }}"class="btn btn-danger mt-3">Nouveau+</a>

    <div class="container mt-3">
        
     

      <div style="text-align: center">
        <h4>LISTE DES CLIENTS</h4>
           </div>

        <section class="contenair mt-1">
          <table class="table table-bordered">

           <tbody>
                <tr>
                  <td>numero</td>
                  <td>nom</td>
                  <td>prenom</td>
                  <td>adresse</td>
                  <td>telephone</td>
                


                </tr>
              </tbody> 
             
            
            
           
          </table>
      </section>   
   




    </div>
@endsection
