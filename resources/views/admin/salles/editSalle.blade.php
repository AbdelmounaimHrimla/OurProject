@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Edit Salle</h1>
@endsection

@section('content')
<div class="editSalle">
        <form>
            <div class="form-group">
                <label for="nomSalle">Nom Salle</label>
                <input type="text" class="form-control" id="nomSalle" placeholder="Salle">
            </div>

            <button class="btn btn-success btn-block">Edit</button>
        </form>
</div>
@endsection


