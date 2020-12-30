@extends('backend.main')


@section('content')


<h2>
Blood Seeker List
<span class="badge bg-blue">{{$seekers->count()}}</span>
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col"> Name</th>
      <th scope="col">Contact</th>
     
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($seekers as $key=>$seeker)
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$seeker->username}}</td>
      <td>{{$seeker->contact}}</td>
  
      <td class="text-center">
      <a class="btn btn-success" href="{{route('seeker.view',$seeker->id)}}">View</a>
      <a class="btn btn-danger" href="{{route('seeker.delete',$seeker->id)}}">Delete</a>
     
  
      
      </td>


    </tr>
    @endforeach
  
  </tbody>
 
</table>
{{$seekers->links()}}
@stop

