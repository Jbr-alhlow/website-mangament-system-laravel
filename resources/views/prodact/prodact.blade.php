
@extends('layouts.app')
<link href="{{ asset('css/prodact.css') }}" rel="stylesheet">
@section('content')


<div class="col-sm-2" >
    <a href='{{ route("prodact.add") }}' class="btn btn-success col-sm-12 " style="left:550%;">Add</a>
</div>
<div class="pagination pagination-centered">{{  $prodact_list->links() }}</div>

<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>prodact-name</th>
          <th>type</th>
          <th>discripe</th>
          <th>action</th>
        </tr>
      </thead>
      <tbody>

            @foreach($prodact_list as $prodact)
            <tr>
          <td>{{$prodact->id}} </td>
          <td>{{$prodact->name}} </td>
          <td>{{$prodact->type}} </td>
          <td>{{$prodact->discripe}} </td>
          <td>
            <div class="row">
                <a href='/prodact/edit/{{ $prodact->id }}' class="btn btn-primary col-sm-4">edit</a>

                <a href='/prodact/show/{{ $prodact->id }}' class="btn btn-primary col-sm-4">show</a>
                <button class="btn btn-danger col-sm-4" onclick="document.getElementById('id01').style.display='block'">delete</button>
                </div>

        </td>
        </tr>
          @endforeach


      </tbody>
    </table>
    </div>

        <br>



        <div class="pagination pagination-centered">{{  $prodact_list->links() }}</div>
        </div>
        </div>
    </div>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/action_page.php">
          <div class="container center">
            <h1>Delete prodact</h1>
            <p>Are you sure you want to delete prodact?</p>

            <div class="clearfix ">
              <button type="button" class="btn btn-light col-sm-5" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
              <a type="button" href='/prodact/delete/{{$prodact->id }}' class="btn btn-danger col-sm-5" style="color:white;">Delete</a>
            </div>
          </div>
        </form>
      </div>


    @endsection
