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

            <form method="POST" action="insermodeles">
                @csrf

              
                    <div class="row m-3">

                        <div>
                            <div class="col-lg-6">
                                <input type="text" name="nom " class="form-control" placeholder="nom modele">
                            </div>
                            <div class="col-lg-6">
                                <label class="text-danger" for="" required></label>
                                <select class="form-control" name="user">
                                    <option value="">Type modele...</option>
                                    <option value="">Enfant...</option>
                                    <option value="">Adulte...</option>
                            </div>
                        </div>   
                            </select>
                            <div class="col-lg-6 m-3">
                                <input name="input-b2" type="file" class="file" class="form-control"
                                    data-show-preview = "false" >
                            </div>




                            <div class="col-auto">
                                <button type="submit" class="btn btn-danger text-light m-2">Ajouter</button>
                            </div>

            </form>


        </div>
    @endsection
