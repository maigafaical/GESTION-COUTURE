@extends('layouts.mainlayout')
@section('content')
    
<body style="background-color: #0BE0FD">

    <div>

        @if (session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
    
@endif
<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger"> {{ $error }}</li>
    @endforeach
</ul>


    <div style="text-align: center">
        <h3>AJOUTER MESURES</h3>
           </div>
          
            <section class=" mt-3 m-3">
                <div class="row mt-3">
                  <form method="POST" action="ajout_mesures" >
                    @csrf
                   
                        <label for="inputPoitrine" class="form-label">Poitrine</label>
                        <input type="number" class="form-control" id="number">
                      </div>
                      <div class="col-md-3">
                        <label for="inputTaille_robe" class="form-label">Taille_robe</label>
                        <input type="number" class="form-control" id="number">
                      </div>

                      <div class="col-md-3">
                        <label for="inputBassins" class="form-label">Bassins</label>
                        <input type="number" class="form-control" id="number">
                      </div>
                      <div class="col-md-3">
                        <label for="inputLongueur" class="form-label">Longueur</label>
                        <input type="number" class="form-control" id="number">
                      </div>

                     
                      <div class="col-md-3">
                        <label for="inputGenoux" class="form-label">Genoux</label>
                        <input type="in" class="form-control" id="int">
                      </div>

                      <div class="col-md-3">
                        <label for="inputManche" class="form-label">Manches</label>
                        <input type="int" class="form-control" id="int">
                      </div>
                      <div class="col-md-3">
                        <label for="inputHanches" class="form-label">Hanches</label>
                        <input type="int" class="form-control" id="int">
                      </div>

                    <div class="col-md-3">
                        <label for="Epaules" class="form-label">Epaules</label>
                        <input type="number" class="form-control" id="number">
                      </div>

                      <div class="col-md-3">
                        <label for="Epaules" class="form-label">poignets</label>
                        <input type="number" class="form-control" id="number">
                      </div>


                     
                      <div class="col-md-3">
                        <label for="inputTour_ventre" class="form-label">Tour_ventre</label>
                        <input type="number" class="form-control" id="number">
                      </div>

                      <div class="col-md-3">
                        <label for="inputLongueur_veste" class="form-label">Longueur_veste</label>
                        <input type="number" class="form-control" id="number">
                      </div>
                     
                      <label for="inputdate" class="form-label">Date_mesure</label>
                      <input type="date" class="form-control" id="date">
                    </div>

            
                    </div>
            </section>
            <div>
                <button type="button" class="btn btn-danger">ENREGISTRE</button>
  </div>

</section>




@endsection