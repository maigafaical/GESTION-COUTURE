@extends('layouts.mainlayout')
@section('content')
@csrf

<ul>
    @foreach ($errors->all() as $error)
        <li class="alert alert-danger"> {{ $error }}</li>
    @endforeach
</ul>
@csrf
    <div>
        <form method="post" action="insertion_clients.php">
            <section class="contenair p-2 bg-danger mt-5 m-3">
                <div class="row mt-3">
                   
                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="nom" class="form-control" placeholder="nom">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="prenom" class="form-control" placeholder="prenom">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="adresse" class="form-control" placeholder="adresse">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="telephone" class="form-control" placeholder="telephone">
                        </div>
                    </div>

                    
                    <div class="row m-3">
                        <div class="col-6">
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary text-light mb-2">Ajouter un client</button>
                            </div>
                        </div>
                    </div>
            </section>
        </form>

 
    </div>
@endsection