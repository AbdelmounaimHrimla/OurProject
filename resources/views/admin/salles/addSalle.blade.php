@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Salle</h1>
@endsection

@section('content')
<div class="addSalle">
        <form>
            <div class="form-group">
                <label for="nomSalle">Nom Salle</label>
                <input type="text" class="form-control" id="nomSalle" placeholder="Salle">
            </div>

            <button class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


