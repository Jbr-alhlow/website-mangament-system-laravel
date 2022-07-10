@extends('layouts.app')

@section('content')

<div class="container">

<div class="row">
	<div class="col-sm-10">
		<h1 class="text-center text-primary">Change status of task: <b>{{ $todo->name }}</b> </h1>
	</div>
	<div class="col-sm-2">
		<a href='/mytasks' class="btn btn-success col-sm-12" >back</a>
	</div>
</div>


<form action='/mytasks/update_status2' method="post">
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

  <input type="hidden" name="id" value="{{ $todo->id }}">
  <div class="form-group">
    <label >Status</label>
    <select class="form-control" name="status">
      @foreach ($status_list as $key => $value)
      <option value="{{ $key }}">{{ $value }}</option>
      @endforeach

    </select>
  </div>
  <button type="submit" class="btn btn-primary">update status</button>
</form>
</div>
@endsection