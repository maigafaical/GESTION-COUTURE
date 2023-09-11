@extends('layouts.mainlayout')

@section('content')

    <body style="background-color: #0BE0FD">

        <a href="{{ route('form_modeles') }}"class="btn btn-danger mt-3">Nouveau+</a>

        <div class="container mt-3">



            <div style="text-align: center">
                <h4>LISTE DES MODELES</h4>
            </div>

            <section class="contenair mt-1">
                <table class="table table-bordered">

                    <tbody>
                        <tr>

                            <td>type_modele</td>
                            <td>nom_modele</td>
                            <td>image</td>


                        </tr>
                    </tbody>




                </table>
            </section>
@endsection
