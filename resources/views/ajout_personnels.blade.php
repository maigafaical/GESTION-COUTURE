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

        <h4>Remplissez le formulaire personnel</h4>

        <form method="POST" action="insertpersonnels">
            @csrf

            <section class="">
             

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
                            <input type="int" name="telephone" class="form-control" placeholder="telephone">
                        </div>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <input type="text" name="poste" class="form-control" placeholder="poste">
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
