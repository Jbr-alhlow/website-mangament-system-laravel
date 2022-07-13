@extends('layouts.app')

@section('content')
<link href="{{ asset('css/task.css') }}" rel="stylesheet">
<div class="container">
<div class="row">
    <div class="col-sm-10">
        <h1>Users Crud</h1>
    </div>
    <div class="col-sm-2">
        <a href='/users/add' class="btn btn-success col-sm-12">Add</a>
    </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">created at</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @php $x = 1; @endphp
    @if($users_list->total()!=0);
    @foreach($users_list as $user)
    <tr>
        <td>{{ $x++ }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->created_at }}</td>
        <td>
            <div class="row">
            <a href='/users/edit/{{ $user->id }}' class="btn btn-primary col-sm-4">edit</a>

            <a href='/users/show/{{ $user->id }}' class="btn btn-primary col-sm-4">show</a>
            <button class="btn btn-danger col-sm-4" onclick="document.getElementById('id01').style.display='block'">delete</button>
            </div>
        </td>
    </tr>


    @endforeach

  </tbody>
</table>
</div>
<div class="pagination pagination-centered">{{  $users_list->links() }}</div>
<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <form class="modal-content" action="/action_page.php">
      <div class="container center">
        <h1>Delete task</h1>
        <p>Are you sure you want to delete taskt?</p>

        <div class="clearfix ">
          <button type="button" class="btn btn-light col-sm-5" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
          <a type="button" href='/users/delete/{{ $user->id }}' class="btn btn-danger col-sm-5" style="color:white;">Delete</a>
        </div>
      </div>
    </form>
  </div>
@endif
@endsection
