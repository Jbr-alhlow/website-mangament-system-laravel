@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="{{ asset('css/task.css') }}" rel="stylesheet">

<div class="container">

<div class="row">
	<div class="col-sm-12">
		<h1 class="text-center text-primary">My Tasks</h1>
	</div>
</div>

<table class='table'>
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Description</th>
		<th>Action</th>
		<th>status</th>
	</tr>

	@php $counter = 1; @endphp
    @if($list->total()!=0);
	@foreach ($list as $task)
		<tr>
		@if($task->status == 0)
		<td class="bg-warning opacity">{{ $counter++ }}</td>
		@elseif($task->status == 1)
		<td class="bg-success opacity">{{ $counter++ }}</td>
		@elseif($task->status == 2)
		<td class="bg-danger opacity">{{ $counter++ }}</td>
		@endif
		<td>{{ $task->name }}</td>
		<td>{{ $task->description }}</td>
		<td>
<div class="dropdown">
<div class="col-12">
				<a href='/todo/show/{{ $task->id }}' class="btn btn-primary col-sm-3.5">show</a>
				<a href='/mytasks/add_comment/{{ $task->id }}' class="btn btn-primary col-sm-3.5">Add comment</a>
				<a href='/mytasks/change_status/{{ $task->id }}' class="btn btn-primary col-sm-3.5">Change Status</a>
<!-- 				<a href='/mytasks/change_status2/{{ $task->id }}' class="btn btn-primary col-sm-2.5">Change Status 2</a>
 -->		</div>

		</td>
		<TD>
			<form action='/mytasks/update_status/{{ $task->id }}' method="post">
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
    <select class="form-control status-drop" name="status">
    	<option value="0">In progress</option>
    	<option value="1">Done</option>
    	<option value="2">Failed</option>

    </select>
  </div>
  <button type="submit" class="btn btn-primary">update status</button>
</form>
		</TD>
	</tr>
	@endforeach

</table>
</div>
<div class="pagination pagination-centered">{{  $list->links() }}</div>
@endif
@endsection
