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

    <div class="text-dark text-center">
        <h3>AJOUTER UNE COUTURE </h3>
           </div>
  
    <div>
        <form method="POST" action="insertioncoutures">
            @csrf

            <section class="">
                <div class="row mt-3">
                   
                    
                      

                    
                        <div class="col-lg-6">
                            <input type="float" name="montant" class="form-control" placeholder="montant">
                        </div>
                        <div class="col-lg-6 ">
                            <input type="date" name="date_depot" class="form-control" placeholder="date_depot">
                        </div>
                            <div class="col-lg-6 m-3">
                                <input type="date" name="date_recuperation" class="form-control" placeholder="date_recuperation">
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-6">
    
                                    <select class="champ col-lg-12" style="height: 150%" name="modeles_id">
    
                                        <option>Selectionner un modele</option>;
                                   @foreach ($modeles as $mod)
                                        <option value="{{$mod->id}}">{{$mod->nom_modele}}</option>
                                    @endforeach
                                    </select>
    
                                </div>
                                <div class="col-lg-6">
    
                                            <select class="champ col-lg-12" style="height: 150%" name="clients_id">
    
                                                <option>Selectionner un client</option>;
                                                @foreach ($clients as $cli)
                                                    <option value="{{$cli->id}}">{{$cli->nom}}</option>
                                                    <option value="{{$cli->id}}">{{$cli->prenom}}</option>
                                                @endforeach
                                            </select>
    
                                        </div>
                        </div>
    





                           
                                <div class="col-lg-6 m-3">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-danger text-light mb-2">Ajouter</button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </section>
            </form>
    
                    




@endsection