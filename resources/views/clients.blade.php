@extends('layouts.mainlayout')

@section('content')

    <div class="container mt-3">
        
      <a href="{{ route('form_clients') }}"class="btn btn-danger">Nouveau+</a>

      <div class="contenair bg-danger text-light text-center mt-5">LISTE DES CLIENTS
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
                   <td>utilisateur</td>


                </tr>
              </tbody> 
             
            
            
           
          </table>
        </section>   





    </div>
@endsection
