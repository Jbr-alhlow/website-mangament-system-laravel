@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Todo info {{ $item->name }}</h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("todo.index") }}' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/todo/update/{{ $item->id }}' method="post">
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
    <input value="{{ $item->name }}" name="name" type="text" class="form-control" >
  </div>

  <div class="form-group">
    <label >Description</label>
    	<textarea name="description" class="form-control">
    {{ $item->description }}
    	</textarea>
  </div>
  
  <div class="form-group">
    <label >User</label>

    <select name='user_id' class="form-control">
      @foreach ($users_list as $object)
      <option value="{{ $object->id }}">{{ $object->name }}</option>
      @endforeach
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection