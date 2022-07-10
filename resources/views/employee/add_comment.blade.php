@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Add Comment to task: <b>{{ $todo->name }}</b> </h1>
	</div>
	<div class="col-sm-2">
		<a href='/mytasks' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/mytasks/store_comment/{{ $todo->id }}' method="post">
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
    <label >Comment</label>
    	<textarea name="comment" class="form-control">
    {{ old('description') }}
    	</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
</div>
@endsection