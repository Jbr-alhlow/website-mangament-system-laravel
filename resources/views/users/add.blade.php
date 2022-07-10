@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-sm-10">
        <h1>Add new user</h1>
    </div>
    <div class="col-sm-2">
        <a href='/users/index' class="btn btn-primary col-sm-12">Back</a>
    </div>
</div>

<form action='/users/store' method="post">
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
    <input  value="{{ old('name') }}" name="name" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input  value="{{ old('email') }}" name="email" type="email" class="form-control" >
  </div>
  <div class="form-group">
    <label >New Password</label>
    <input  value="{{ old('password') }}" name="password" type="password" class="form-control" >
  </div>
  <div class="form-group">
    <label >New Password Confirmation</label>
    <input  value="{{ old('password_confirmation') }}" name="password_confirmation" type="password" class="form-control" >
  </div>  
  <div class="form-check">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
@endsection
