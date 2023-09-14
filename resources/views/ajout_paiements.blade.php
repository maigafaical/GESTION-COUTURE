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
        <h3>AJOUTER UN PAIEMENT </h3>
           </div>
  
    <div>
        <form method="POST" action="insertionpaiements">
            @csrf

            <section class="">
                <div class="row mt-3">
                   
                    
                       

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="float" name="montant" class="form-control" placeholder="montant">
                        </div>

                        <div class="col-lg-6">
                            <input type="int" name="acompte" class="form-control" placeholder="acompte">
                        </div>


                        <div class="col-lg-6 mt-3">
                            <input type="int" name="reste" class="form-control" placeholder="reste">
                        </div>

                        <div class="col-lg-6 mt-3">
                            <input type="texte" name="mode_paiement" class="form-control" placeholder="mode_paiement">
                        </div>
                        <div class="col-lg-6 mt-3">
                            <input type="date" name="date_paiement" class="form-control" placeholder="date_paiement">
                        </div>
                        <div class="col-lg-6 mt-3">

                            <select class="form-control col-lg-12" name="coutures_id" placeholder="Informations">

                                <option>Selectionner une couture</option>;
                                @foreach ($couture as $cou)
                                    <option value="{{ $cou->id }}">{{ $cou->description}}</option>
                                @endforeach
                            </select>

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