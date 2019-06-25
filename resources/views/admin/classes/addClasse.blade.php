@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Classe</h1>
@endsection

@section('content')
<div class="addClasse">
        <form>
            <div class="form-group">
                <label for="nomClasse">Nom Classe</label>
                <input type="text" class="form-control" id="nomClasse" placeholder="Classe">
            </div>

            <button class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


