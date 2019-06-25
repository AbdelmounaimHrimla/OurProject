@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Edit Etudiant</h1>
@endsection

@section('content')
<div class="editEtudiant">
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
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Votre Password">
            </div>
            <button class="btn btn-success btn-block">Edit</button>
        </form>
</div>
@endsection


