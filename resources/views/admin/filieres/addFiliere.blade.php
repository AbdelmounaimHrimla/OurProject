@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Add Filiére</h1>
@endsection

@section('content')
<div class="addFiliere">
        <form>
            <div class="form-group">
                <label for="nomFiliere">Nom Filiére</label>
                <input type="text" class="form-control" id="nomFiliere" placeholder="Filiére">
            </div>

            <button class="btn btn-primary btn-block">Save</button>
        </form>
</div>
@endsection


