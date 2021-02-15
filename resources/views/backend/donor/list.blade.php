@extends('backend.main')


@section('content')


<h2>
Donor List
<span class="badge bg-blue">{{$donors->count()}}</span>
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Donor Name</th>
      <th scope="col">Status</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
@foreach($donors as $key=>$donor)
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$donor->username}}</td>
      <td>{{$donor->status}}</td>
      <td class="text-center">
      <a class="btn btn-primary" href="{{route('donor.edit',$donor->id)}}">Edit</a>
      <a class="btn btn-danger" href="{{route('donor.delete',$donor->id)}}">Delete</a>
      <a class="btn btn-success" href="{{route('donor.view',$donor->id)}}">View</a>
      
      </td>


    </tr>
   @endforeach
  
  </tbody>
 
</table>

{{$donors->links()}}
@stop

