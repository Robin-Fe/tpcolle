@extends('template')

@section('titrePage')
    Information sur le Film
@endsection

@section('contenu')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-horizontal">
                        <div class="card-body">
                            <h5 class="card-title">Titre : {{ $film->titre }}</h5>
                            <p class="card-text">
                            <p>Année de sortie : {{ $film->anneeSortie }}</p>
                            <p>Catégorie : {{ $film->categorie->libelle }}</p>
                            <p>Description : {{ $film->description }}</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
