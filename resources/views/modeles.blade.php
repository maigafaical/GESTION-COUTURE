@extends('layouts.mainlayout')

@section('content')

    <body style="background-color: #0BE0FD">

        <a href="{{ route('form_modeles') }}"class="btn btn-danger mt-3">Nouveau+</a>

        <div class="container mt-3">



            <div style="text-align: center">
                <h4>GALERIE DES MODELES</h4>
            </div>

            <section class="contenair mt-1">
                <table class="table table-bordered">

                    
                    <tbody>
                        @foreach ($modeles as $mod)
                        <div class="card" style="width: 10rem;">
                     <img src="{{ asset('storage') . '/' .  $mod->image }}" alt="">
                            <div class="card-body">
                        <p class="card-text">{{ $mod->nom_modele }}</p>
                        <p class="card-text">{{ $mod->type_model}} </p>

                            </div>
                           </div>
                           
                        @endforeach
                    </tbody>
    
    
    
    
                
    



                </table>
            </section>
@endsection
