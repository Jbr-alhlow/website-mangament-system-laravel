@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-10">
        <h1>User info: {{ $user->name }}</h1>
    </div>
    <div class="col-sm-2">
        <a href='/users/index' class="btn btn-primary col-sm-12">Back</a>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">created at</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
    </tr>



  </tbody>
</table>
</div>
@endsection
