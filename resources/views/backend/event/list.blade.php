@extends('backend.main')


@section('content')


<h2>
Event list
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Event Name</th>
      <th scope="col">Date</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($events as $key=>$event)
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$event->name}}</td>
      <td>{{$event->date}}</td>
      <td class="text-center">
      <a class="btn btn-primary" href="{{route('event.edit',$event->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('event.delete',$event->id)}}">Delete</a>
      <a class="btn btn-success" href="{{route('event.view',$event->id)}}">View</a>
      
      </td>


    </tr>
   @endforeach
  
  </tbody>
 
</table>

{{$events->links()}}
@stop

