@extends('layouts.app')

@section('content')
<link href="{{ asset('css/task.css') }}" rel="stylesheet">


<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Todo index</h1>
	</div>
	<div class="col-sm-2">
		<a href='{{ route("todo.add") }}' class="btn btn-success col-sm-12" >Add</a>
	</div>
</div>

<form >
  <div class="form-group">
    <label >User</label>
  <select class="form-select form-control" name='user[]' multiple="">
  	<option value="0">All</option>
  	@if(request('user'))
	    @foreach($users as $user)
	    @if( in_array($user->id, request('user')))
	    <option value="{{ $user->id }}" selected>{{ $user->name }}
	    </option>
	    @else
	    <option value="{{ $user->id }}">{{ $user->name }}
	    </option>
	    @endif
	    @endforeach

  	@else
	    @foreach($users as $user)
	    <option value="{{ $user->id }}">{{ $user->name }}
	    </option>
	    @endforeach

  	@endif
</select>

  <div class="form-group">
    <label >description</label>
    <input  value="{{ request('description') }}" name="description" type="text" class="form-control" >
  </div>


 <!--  <div class="form-group">
    <label >name</label>
    <input  value="{{ request('name') }}" name="name" type="text" class="form-control" >
  </div> -->


  <div>
  	<label>Status</label>
    <div class="radio">
      <label><input type="radio" name="status" value="-1" >All</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="status" value="1">Done</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="status" value="2" >Failed</label>
    </div>
    <div class="radio disabled">
      <label><input type="radio" name="status" value="0" >In progress</label>
    </div>

  </div>


</div>
	<button type="submit" class="btn btn-primary">Search</button>
</form>

<table class='table'>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Status</th>
		<th>User</th>
		<th>Description</th>
		<th>Action</th>
	</tr>

	@php $counter = 1; @endphp
	@foreach ($list as $item)
	<tr>
		<td>{{ $counter++ }}</td>
		<td>{{ $item->name }}</td>

		@if($item->status == 0)
		<td class="bg-warning ">In progress...</td>
		@elseif($item->status == 1)
		<td class="bg-success opac">Done</td>
		@else
		<td class="bg-danger opac">Failed !</td>
		@endif

		<td>{{ $item->user->name }}</td>
		<td>{{ $item->description }}</td>
		<td>
			<div class="row">
				<a href='/todo/edit/{{ $item->id }}' class="btn btn-primary col-sm-4">update</a>
				<a href='/todo/show/{{ $item->id }}' class="btn btn-primary col-sm-4">show</a>
				<a  class="btn btn-danger col-sm-4" onclick="document.getElementById('id01').style.display='block'" style="color:white;">delete</a>

			</div>
		</td>
	</tr>
	@endforeach
</table>

</div>
<div class="pagination pagination-centered">{{  $list->links() }}</div>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container center">
      <h1>Delete task</h1>
      <p>Are you sure you want to delete taskt?</p>

      <div class="clearfix ">
        <button type="button" class="btn btn-light col-sm-5" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
        <a type="button" href='/todo/delete/{{ $item->id }}' class="btn btn-danger col-sm-5" style="color:white;">Delete</a>
      </div>
    </div>
  </form>
</div>

@endsection
