@extends('layouts.app')

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
    <input value="{{ old('name') }}" name="name" type="text" class="form-control" >
  </div>

  <div class="form-group">
    <label >User</label>
  <select class="form-select form-control" name='user_id'>
    @foreach($users as $user)
    <option value="{{ $user->id }}" >{{ $user->name }}</option>
    @endforeach
</select>
</div>

  <div class="form-group">
    <label >Description</label>
    	<textarea name="description" class="form-control">
    {{ old('description') }}
    	</textarea>
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
</div>
@endsection