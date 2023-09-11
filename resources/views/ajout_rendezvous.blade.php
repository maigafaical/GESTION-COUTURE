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
        <h3>AJOUTER UN RENDEZ-VOUS </h3>
           </div>
  
    <div>
        <form method="POST" action="insertrendezvous">
            @csrf

            <section class="">
              <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="text" name="libelle" class="form-control" placeholder="libelle">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6">
                            <input type="date" name="date_rdv" class="form-control" placeholder="date_rdv">
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