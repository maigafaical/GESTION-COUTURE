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
            <h3>AJOUTER UN MODELE</h3>

            <div class="container p-2 bg-danger m-1">

                <form action="insertionmodeles" method="POST" class="row g-3 form-group" enctype="multipart/form-data">
                    @csrf
                    <section class="contenair p-2 bg-danger mt-3 m-3">
                        <div class="row mt-3">

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="text" name="nom_modele" class="form-control"
                                        placeholder="Nom du modèle">
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <input type="text" name="type_modele" class="form-control" placeholder="Nom du modèle">
                                    </div>
                                </div>

                            <div class="row mt-3">
                                <div class="col-lg-6">
                                    <input type="file" name="image" class="form-control" placeholder="image">
                                </div>

                            </div>


                            <div class="row m-3">
                                <div class="col-6">
                                    <div class="col-auto">
                                        <button type="submit"  class="btn btn-dark text-light mb-2">ajouter</button>
                                    </div>
                                </div>
                            </div>
                    </section>

                  </form>
  </div>
                </div>
    @endsection
