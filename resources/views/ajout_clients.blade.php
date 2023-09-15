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
        <h4>Ajouter un nouveau client</h4>

        <form method="POST" action="insertion_clients">
            @csrf

            <section class="">
                <div class="row mt-5">
                   
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="nom" class="form-control" placeholder="Nom">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="prenom" class="form-control" placeholder="Prénom">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="adresse" class="form-control" placeholder="Adresse">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="telephone" class="form-control" placeholder="Téléphone">
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