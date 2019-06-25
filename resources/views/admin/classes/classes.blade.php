@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Classes</h1>
@endsection

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nom Classe</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>@mdo</td>
        <td>
            <button class="btn btn-primary">Show</button>
            <button class="btn btn-success">Edit</button>
            <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>



@endsection


