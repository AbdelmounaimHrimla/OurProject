@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Intervenant</h1>
@endsection

@section('content')
<div class="addIntervenant">
        <form>
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" placeholder="Votre Nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" placeholder="Votre Prénom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Votre Email">
            </div>
            <button class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


