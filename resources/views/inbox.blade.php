@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">My Inbox</h1>
	</div>
	<div class="col-sm-2">
		<a href='/home' class="btn btn-success col-sm-12" >Back</a>
	</div>
</div>

<table class='table'>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>email</th>
		<th>phone</th>
		<th>Action</th>
	</tr>

	@php $counter = 1; @endphp
	@foreach ($inbox_list as $item)
	<tr>
		<td>{{ $counter++ }}</td>
		<td>{{ $item->name }}</td>
		
		<td>{{ $item->email }}</td>
		<td>{{ $item->phone }}</td>
		<td>
			<div class="row">
				<a href='/inbox_show/{{ $item->id }}' class="btn btn-info col-sm-12">show</a>
			</div>
		</td>
	</tr>
	@endforeach
</table>
</div>
@endsection