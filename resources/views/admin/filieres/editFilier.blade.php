@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Edit Filiére</h1>
@endsection

@section('content')
<div class="editFiliere">
        <form>
            <div class="form-group">
                <label for="nomFiliere">Nom Filiére</label>
                <input type="text" class="form-control" id="nomFiliere" placeholder="Filiéres">
            </div>

            <button class="btn btn-success btn-block">Edit</button>
        </form>
</div>
@endsection


