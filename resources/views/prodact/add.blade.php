@extends('layouts.app')

@section('content')


<link href="{{ asset('css/overflow.css') }}" rel="stylesheet">



<body>


<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Add new prodact </h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("prodact.prodact") }}' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/prodact/store' method="post">
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
    <label >price</label>
    <br>
    <input value="{{ old('price') }}" name="price" type="text" class="form-control input-s" >
  </div>
  <div class="form-group">
    <label >type</label>
    <br>
   <select name="type" id="">
    <option value="shoe">shoe</option>
    <option value="computer">computer</option>
   </select>
  </div>
  <div class="form-group">
    <label >img</label>
    <br>
    <input value="{{ old('img') }}" name="img" type="text" class="form-control input-s " style="overflow: scroll" >
  </div>

  <div class="form-group">
    <label >Description</label>
    <br>
    	<textarea name="discripe" class="form-control input-s">
    {{ old('discripe') }}
    	</textarea>
  </div>
  <button type="submit" class="btn btn-primary">create</button>
</form>
</div>
</body>

@endsection
