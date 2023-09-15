@extends('layouts.mainlayout')
@section('content')

    <body style="background-color: #0BE0FD">


        <div class="text-dark text-center">
            <h3>LISTE DES PERSONNELS </h3>
        </div>
        <a href="{{ route('form_personnels') }}"class="btn btn-danger">Nouveau+</a>


        <section class="contenair mt-1">
            <table class="table table-bordered">

                <tbody>
                    <tr>
                        <td>Numero</td>
                        <td>Nom</td>
                        <td>Prénom</td>
                        <td>Adresse</td>
                        <td>Téléphone</td>
                        <td>Poste</td>
                        <td>Actions</td>



                    </tr>
                </tbody>
                <tbody>
                    @foreach ($personnels as $pers)
                        <tr>
                            <td>{{ $pers->id }}</td>
                            <td>{{ $pers->nom }}</td>
                            <td>{{ $pers->prenom }}</td>
                            <td>{{ $pers->adresse }}</td>
                            <td>{{ $pers->telephone }}</td>
                            <td>{{ $pers->poste }}</td>
                            <td>
                            <a href="#"{{ $pers->id }} class="btn btn-info">Modifier</a>
                            <a href="#"{{ $pers->id }} class="btn btn-danger">supprimer</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>




            </table>
        </section>





        
    @endsection
