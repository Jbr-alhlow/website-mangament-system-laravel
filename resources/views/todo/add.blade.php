@extends('layouts.app')
<link href="{{ asset('css/overflow.css') }}" rel="stylesheet">

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Add new Task </h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("todo.index") }}' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/todo/store' method="post">
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
    <br>
    <input value="{{ old('name') }}" name="name" type="text" class="form-control input-s" >
  </div>

  <div class="form-group">
    <label >User</label>
    <br>
  <select class="form-select form-control input-s" name='user_id'>
    @foreach($users as $user)
    <option value="{{ $user->id }}" >{{ $user->name }}</option>
    @endforeach
</select>
</div>

  <div class="form-group">
    <label >Description</label>
    <br>
    	<textarea name="description" class="form-control input-s">
    {{ old('description') }}
    	</textarea>
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
</div>
@endsection
