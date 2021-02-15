@extends('backend.main')


@section('content')


<h2>
Notification List
<span class="badge bg-blue"></span>
</h2>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Post Name</th>
      <th scope="col">Poster Name</th>
      <th scope="col">Responser Name</th>
      <th scope="col">Email</th>
      
    </tr>
  </thead>
  <tbody>


@foreach($notifications as $key=>$notificaton)
    @php 
    $notifcationdata = json_decode($notificaton->data)
    @endphp
    <tr >
      <th scope="row">{{$key+1}}</th>
      <td>{{$notifcationdata->post->name}}</td>
      <td>{{$notifcationdata->post->user->username}}</td>
      <td>{{$notifcationdata->user->username}}</td>
      <td>{{$notifcationdata->post->user->email}}</td>
      


    </tr>

    @endforeach

  
  </tbody>
 
</table>

@stop
