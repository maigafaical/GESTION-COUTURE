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
          
           <form method="POST" action="insertionmesures">
            @csrf

            <section class="">
               
                   
                    <div class="row mt-3">
                        <div class="col-lg-6 mt-3">
                          <input type="number" name="poitrine" class="form-control" placeholder="Poitrine">
                        </div>
                      

                        <div class="col-lg-6 mt-3">
                          <input type="number" name="taille_robe" class="form-control" placeholder="Taille-robe">
                        </div>
                    

                    
                        <div class="col-lg-6 mt-3">
                          <input type="number" name="bassins" class="form-control" placeholder="Bassins">
                        </div>
                        <div class="col-lg-6 mt-3">
                          <input type="number" name="longueur" class="form-control" placeholder="Longueur">    
                         </div>

                         
                          <div class="col-lg-6 mt-3">
                            <input type="number" name="genoux" class="form-control" placeholder="Genoux">
                          </div>
                          
                          <div class="col-lg-6 mt-3">
                            <input type="number" name="manches" class="form-control" placeholder="Manches">    
                           </div>
                          </div>

                           
                           <div class="row mt-3">
                           <div class="col-lg-6">
                            <input type="number" name="hanches" class="form-control" placeholder="Hanches">    
                           </div>
  
                           
                            <div class="col-lg-6 mt-3">
                              <input type="number" name="epaules" class="form-control" placeholder="Epaules"> 
                            </div>
                            
                            <div class="col-lg-6 mt-3">
                              <input type="number" name="poignets" class="form-control" placeholder="Poignets">    
                             </div>

                             
                              <div class="col-lg-6 mt-3">
                                <input type="number" name="tour_ventre" class="form-control" placeholder="Tour-ventre"> 
                              </div>

                            
                                <div class="col-lg-6 mt-3">
                                  <input type="number" name="longueur_veste" class="form-control" placeholder="Longueur-veste"> 
                                </div>

                              
                                  <div class="col-lg-6 mt-3">
                                    <input type="date" name="date_" class="form-control" placeholder="Date"> 
                                  </div>

                                  <div class="row mt-4">
                                    <div class="col-lg-6">
    
                                      <select class="champ col-lg-12" style="height: 150%" name="clients_id">
  
                                          <option>Selectionner un client</option>;
                                          @foreach ($clients as $cli)
                                              <option value="{{ $cli->id }}">{{ $cli->nom }}</option>
                                              <option value="{{ $cli->id }}">{{ $cli->prenom }}</option>
                                          @endforeach
                                      </select>
  
                                  </div>
                                  <div class="col-lg-6">

                                    <select class="champ col-lg-12" style="height: 150%" name="modeles_id">
      
                                        <option>Selectionner un modele</option>;
                                        @foreach ($modele as $mod)
                                            <option value="{{ $mod->id }}">{{ $mod->nom_modele }}</option>
                                        @endforeach
                                    </select>
      
                      </div>
                                </div>












                         
                    

                   
                    <div class="row m-3">
                        <div class="col-3">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-danger text-light mb-2">Ajouter</button>
                            </div>
                        </div>
                    </div>
            </section>
        </form>

 
    </div>





@endsection