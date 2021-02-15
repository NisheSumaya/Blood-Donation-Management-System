@extends('backend.main')


@section('content')
@if ($errors->any())
    <div>
        
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        
    </div>
@endif

@if(session()->has('msg'))

<p class= "alert alert-success">{{session()->get('msg')}}</p>

@endif
<form method="post" action="{{route('donor.update',$donor->id)}}">
@method('put')
<h2>Edit Donors</h2>
@csrf
  <div class="form-group">
    <label for="username"> Name</label>
    <input value="{{$donor->username}}" name="username"  placeholder=" fill up please" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input value="{{$donor->password}}"name="password"  placeholder=" fill up please" type="password" class="form-control" id="password" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input  value="{{$donor->email}}"name="email"  placeholder=" fill up please" type="email" class="form-control" id="e_mail" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input  value="{{$donor->contact}}"name="contact"  placeholder=" fill up please" type="number" class="form-control" id="contact" aria-describedby="emailHelp">
   
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select name="status" id=""class="form-control">
 
    <option value="acive" {{$donor->status =='active' ? 'selected':''}}>active</option>
    <option value="inactive" {{$donor->status =='inactive' ? 'selected':''}} >Inactive</option>
    
    </select>
   
  </div>
  
  
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="" cols="30" rows="5" class="form-control" id="e_mail" aria-describedby="emailHelp">{{$donor->address}}</textarea>
   
  </div>
  <button class="alert alert-success" type="submit" class="btn btn-primary">Update</button>
</form>

@stop