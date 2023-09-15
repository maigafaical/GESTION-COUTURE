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
        <h3>Ajouter un nouveau rendez-vous </h3>
           </div>
  
    <div>
        <form method="POST" action="insertrendezvous">
            @csrf

            <section class="">
              <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="libelle" class="form-control" placeholder="Libellé">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" name="date_rdv" class="form-control" placeholder="Date du rendez_vous">
                           </div>
                    </div>

                    <div class="row mt-3">
                        
                           <div class="col-lg-6">
    
                            <select class="form-control"  name="clients_id" >

                                <option>Selectionner un client</option>;
                                @foreach ($client as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->nom  }} {{ $cli->prenom }}</option>
        
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
                    </div>
                </section>
            </form>
    
                    




@endsection