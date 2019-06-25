@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
<h1>Etudiants</h1>
@endsection

@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>
<button class="btn btn-primary">Show</button>
<button class="btn btn-success">Edit</button>
<button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>
        <button class="btn btn-primary">Show</button>
        <button class="btn btn-success">Edit</button>
        <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
        <td>
            <button class="btn btn-primary">Show</button>
            <button class="btn btn-success">Edit</button>
            <button class="btn btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>



@endsection


