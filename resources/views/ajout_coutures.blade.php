@extends('layouts.mainlayout')
@section('content')

    <body style="background-color: #0BE0FD">

        <div>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
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
                    <input type="text" name="users_id" class="form-control" value="{{ Auth::user()->id }}" hidden>
                    <section >



                        <div class="row m-2">

                            <div class="col-lg-6">
                            <input type="text" name="description" class="form-control"
                                placeholder="Description de la couture">
                        </div>

                        <div class="col-lg-6 ">
                            <input type="date" name="date_depot" class="form-control" placeholder="date_depot">
                        </div>
                     </div>


                     <div class="row m-2">
                        <div class="col-lg-6 ">
                            <input type="date" name="date_recuperation" class="form-control"
                                placeholder="date_recuperation">
                        </div>


                        <div class="col-lg-6">

                            <select class="form-control" name="modeles_id">

                                <option>Selectionner un modele</option>;
                                @foreach ($modele as $mod)
                                    <option value="{{ $mod->id }}">{{ $mod->nom_modele }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
            
                        <div class="col-lg-6 m-3">
                            <select class="form-control" name="clients_id">

                                <option>Selectionner un client</option>;
                                @foreach ($client as $cli)
                                    <option value="{{ $cli->id }}">{{ $cli->nom }} {{ $cli->prenom }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
           







            <div class="col-lg-6 m-3">
                <div class="col-auto">
                    <button type="submit" class="btn btn-danger text-light mb-2">Ajouter</button>
                </div>
            </div>

        </div>
        </section>
        </form>
    @endsection
