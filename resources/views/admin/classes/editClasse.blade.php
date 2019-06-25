@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Edit Classe</h1>
@endsection

@section('content')
<div class="editClasse">
        <form>
            <div class="form-group">
                <label for="nomClasse">Nom Classe</label>
                <input type="text" class="form-control" id="nomClasse" placeholder="Classe">
            </div>

            <button class="btn btn-success btn-block">Edit</button>
        </form>
</div>
@endsection


