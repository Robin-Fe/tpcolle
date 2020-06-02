@extends('template')

@section('titrePage')
    Information sur la catégorie
@endsection

@section('contenu')
    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Libellé : {{ $categorie->libelle }}</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <p>Nombre de films appartenants à cette catégorie : </p>
            </div>
        </div>
    </div>
@endsection
