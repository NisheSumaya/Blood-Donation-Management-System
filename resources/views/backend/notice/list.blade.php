@extends('backend.main')


@section('content')


<h2>
Notice list
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Notice Title</th>
      <th scope="col">Description</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($notices as $key=>$notice)
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$notice->name}}</td>
      <td>{{$notice->description}}</td>
      <td class="text-center">
      <a class="btn btn-primary" href="">Edit</a>
      <a class="btn btn-danger" href="">Delete</a>
      
      </td>


    </tr>
   @endforeach
  
  </tbody>
 
</table>

{{$notices->links()}}
@stop

