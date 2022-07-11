@extends('layouts.app')


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agency - Start Bootstrap Theme</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <link href="{{ asset('css/prodact.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>.card{
display: block !important;
position: fixed !important;
top: 200px !important;
right: 100px !important;
transition: all 0.3s;

}</style>

</head>
@section('content')
<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">edite  {{ $item->name }} number {{$item->id}} </h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("prodact.prodact") }}' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/prodact/update/{{ $item->id }}' method="post">
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
    <label >img</label>
    <input value="{{ $item->img }}" name="img" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label >price</label>
    <input value="{{ $item->price }}" name="price" type="text" class="form-control" >
  </div>
  <div class="form-group">
    <label >Description</label>
    	<textarea name="discripe" class="form-control">
    {{ $item->discripe}}
    	</textarea>
  </div>
  <label >type</label>
  <select name="type" id="">
   <option value="shoe">shoe</option>
   <option value="computer">computer</option>
  </select>


  <button type="submit" class="btn btn-primary">update</button>
</form>



</div>
<div class="card col-12 col-lg-2 col-sm-12 col-md-8" style="width:350px; margin-left:auto;margin-right:auto;">

    <img class="card-img-top" src='{{$item->img}}' alt="Card image" style="width:180px; height:160px;margin-left:auto;margin-right:auto">
  <div class="card-body">
    <h4 class="card-title">{{$item->name}} {{$item->id}}</h4>
    <p class="card-text">{{$item->discripe}}</p><p class="price">{{{$item->price}}}</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
@endsection
