@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">upload image</h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("todo.index") }}' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/store_image' method="post" enctype="multipart/form-data" method="post">
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
        <label for="image">Image</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="image" name="image">
            <label class="custom-file-label" for="image">Image</label>
        </div>
    </div>

  
  
  <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
@endsection