@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Message from {{ $inbox_object->name }}</h1>
	</div>
	<div class="col-sm-2">
		<a href='/inbox' class="btn btn-success col-sm-12" >Back</a>
	</div>
</div>

<table class='table'>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>email</th>
		<th>phone</th>
		<th>Date</th>
	</tr>

	<tr>
		<td>{{ $inbox_object->name }}</td>
		
		<td>{{ $inbox_object->email }}</td>
		<td>{{ $inbox_object->phone }}</td>
		<td>{{ $inbox_object->body }}</td>
		<td>{{ $inbox_object->created_at }}</td>
	</tr>
</table>
</div>
@endsection