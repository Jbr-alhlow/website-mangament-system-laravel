

@extends('layouts.app')

@section('content')




<div class="container">
    <h2>prodact number {{$prodact->id}}</h2>
    <table class="table">
      <thead>
        <th>id</th>
          <th>prodact-name</th>
          <th>type</th>
          <th>discripe</th>
             <th>img</th>
             <th>img</th>
             <th>created-at</th>

        </tr>
      </thead>
      <tbody>


            <tr>
          <td>{{$prodact->id}} </td>
          <td>{{$prodact->name}} </td>
          <td>{{$prodact->type}} </td>
          <td>{{$prodact->discripe}} </td>
          <td>{{$prodact->img}} </td>
          <td> <img class="card-img-top" src='{{$prodact->img}}' alt="Card image" style="width:220px; height:160px;margin-left:auto;margin-right:auto">
          </td>
          <td>{{$prodact->created_at}} </td>
            </tr>

      </tbody>
    </table>
  </div>


  @endsection
