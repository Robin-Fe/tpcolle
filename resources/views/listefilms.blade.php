
@extends('template')

@section('titrePage')
    Liste des Films
@endsection

@section('titreItem')
    <h1>Tous les Films :</h1>
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
            <p class="card-header-title">Afficher les films par catégorie : </p>
            <div class="select">
                <select onchange="window.location.href = this.value">
                    <option value="{{ route('films.index') }}" @unless($laCategorie) selected @endunless>Toutes les catégories</option>
                    @foreach($categories as $categorie)
                        <option value="{{ route('films.categorie', $categorie->libelle) }}" {{ $laCategorie == $categorie->libelle ? 'selected' : '' }}>{{ $categorie->libelle }}</option>
                    @endforeach
                </select>
            </div>
        </header>
        <div class="card-content">
            <div class="content">
                <table class="table is-hoverable">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Année de Sortie</th>
                        <th>Description</th>
                        <th>Catégorie</th>
                        <th></th>
                        <th><a class="btn btn-warning" href="{{ route('films.create') }}">Ajouter un film</a></th>
                        <th></th>
                    </tr>
                    </thead>
                    @foreach($lesFilms as $film)
                        <tr>
                            <td> {{ $film->id }} </td>
                            <td><strong>{{ $film->titre}}</strong>  </td>
                            <td> {{ $film->anneeSortie}}</td>
                            <td> {{ $film->description}}</td>
                            <td> {{ $film->categorie->libelle}}</td>
                            <td><a class="btn btn-primary" href="{{ route('films.show', $film->id) }}">Voir</a></td>
                            <td><a class="btn btn-warning" href="{{ route('films.edit', $film->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('films.destroy', $film->id) }}" method="post">
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

