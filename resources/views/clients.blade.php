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
                  <td>Numero</td>
                  <td>Nom</td>
                  <td>Prénom</td>
                  <td>Adresse</td>
                  <td>Téléphone</td>
                  <td>Actions</td>
                


                </tr>
              </tbody> 

              <tbody>
                @foreach ($clients as $cli)
                    <tr>
                        <td>{{ $cli->id }}</td>
                        <td>{{ $cli->nom }}</td>
                        <td>{{ $cli->prenom }}</td>
                        <td>{{ $cli->adresse }}</td>
                        <td>{{ $cli->telephone }}</td>
                        <td>
                          <a href="#"{{ $cli->id }} class="btn btn-info">Modifier</a>
                          <a href="#"{{ $cli->id }} class="btn btn-danger">supprimer</a>
                        </td>
                   </tr> 
                @endforeach
              </tbody>
             
            
            
           
          </table>
      </section>   
   




    </div>
@endsection
