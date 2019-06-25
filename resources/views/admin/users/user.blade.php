@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Users</h1>
<button class="btn btn-primary pull-right">+ New User</button>
@endsection

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Type</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>@Otto</td>
        <td>mdo</td>
        <td>
<button class="btn btn-primary">Show</button>
<button class="btn btn-success">Edit</button>
<button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>



@endsection


