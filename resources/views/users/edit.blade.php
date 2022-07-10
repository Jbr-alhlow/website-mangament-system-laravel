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

<form action='/users/update/{{ $user->id }}' method="post">
@if ($errors->any())
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

  @csrf
  <div class="form-group">
    <label >Name</label>
    <input value="{{ $user->name }}" name="name" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input value="{{ $user->email }}" name="email" type="email" class="form-control" >
  </div>
  <div class="form-group">
    <label >New Password</label>
    <input  name="password" type="password" class="form-control" >
  </div>
  <div class="form-group">
    <label >New Password Confirmation</label>
    <input  name="password_confirmation" type="password" class="form-control" >
  </div>  
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection
