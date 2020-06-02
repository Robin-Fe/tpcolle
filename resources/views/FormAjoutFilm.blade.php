
@extends('template')

@section('titrePage')
    Ajouter un Film
@endsection

@section('titreItem')
    <h1>Ajouter un Film</h1>
@endsection

@section('contenu')
    <div class="col-sm-offset-3 col-sm-6">
        <div class="card">
            <div class="card-header">Créer un film</div>
            <div class="card-body">
                {!! Form::open(['url' => 'films']) !!}
                <div class="form-group {!! $errors->has('titre') ? 'has-error' : '' !!}">
                    {!! Form::text('titre', null, ['class' => 'form-control', 'placeholder' => 'Titre du film']) !!}
                    {!! $errors->first('titre', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('anneeSortie') ? 'has-error' : '' !!}">
                    {!! Form::number('anneeSortie', null, ['class' => 'form-control', 'placeholder' => 'Année de sortie']) !!}
                    {!! $errors->first('anneeSortie', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description du film']) !!}
                    {!! $errors->first('description', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('categorie_id') ? 'has-error' : '' !!}">
                    {!! Form::number('categorie_id', null, ['class' => 'form-control', 'placeholder' => 'Numéro de la catégorie']) !!}
                    {!! $errors->first('categorie_id', '<small class="help-block text-danger">:message</small>') !!}
                </div>
                {!! Form::submit('Valider', ['class' => 'btn btn-info pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <p></p>
@endsection
