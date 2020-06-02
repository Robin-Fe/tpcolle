@extends('template')

@section('titrePage')
    Liste des Categories
@endsection

@section('titreItem')
    <h1>Toutes les Categories :</h1>
@endsection

@section('contenu')

    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <div class="card">
        <header class="card-header">
            <h5 class="card-header-title">Nous avons sélectionné pour vous :</h5>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>Identifiant</th>
                        <th>Libelle</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($lesCategories as $categorie)
                        <tr>
                            <td> {{ $categorie->id }} </td>
                            <td><strong>{{ $categorie->libelle}}</strong>  </td>
                            <td><a class="btn btn-primary" href="{{ route('categories.show', $categorie->id) }}">Voir</a></td>
                            <td>
                                <form action="{{ route('categories.destroy', $categorie->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

