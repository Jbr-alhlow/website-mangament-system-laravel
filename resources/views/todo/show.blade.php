@extends('layouts.app')

@section('content')
<link href="{{ asset('css/task.css') }}" rel="stylesheet">
<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Todo info {{ $item->name }}</h1>
	</div>
	<div class="col-sm-2">

		<a href='#' class="btn btn-success col-sm-12" onclick="history.back()">back</a>
		<br>
		@if(Auth::user()->is_admin)
		<a href='/mytasks/add_comment/{{ $item->id }}' class="btn btn-primary col-sm-12">Add comment</a>
        @endif
	</div>
</div>

<table class='table'>
	<tr>
		<th>Name</th>
		<th>User</th>
		<th>Description</th>
	</tr>

	<tr>
		<td>{{ $item->name }}</td>
		<td>{{ $item->user->name }}</td>
		<td>{{ $item->description }}</td>
	</tr>
</table>


<h1>Comments</h1>
<table class='table'>
	<tr>


		<th>user</th>


	</tr>


		@php $counter = 1; @endphp

		@foreach($item->comments as $comment)
		<tr>


		<td><span style="font-size: 20px;">{{ $comment->user->name }}</span></td>


		</tr>
		<tr><td >	Comment: <div class="comment" style="font-size: 20px;">{{ $comment->comments }}</div>	</td></tr>
        <tr><td><div style="margin-left: 800px;">{{ $comment->created_at }}</div></td></tr>
		@endforeach

</table>

</div>
</div>
@endsection
