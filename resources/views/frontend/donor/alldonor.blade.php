@extends('master.master')


@section('content')


<h2>
 All Donor List
<span class="badge bg-blue"></span>
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
@foreach($alldonors as $key=>$donor)
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$donor->username}}</td>
      <td>{{$donor->status}}</td>
      <td class="text-center">
      <a class="btn btn-danger" href="{{route('donor.profile',$donor->id)}}">View</a>
      
      </td>


    </tr>
   @endforeach
  
  </tbody>
 
</table>

{{$alldonors->links()}}
@stop
