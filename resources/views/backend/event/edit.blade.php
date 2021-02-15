@extends('backend.main')


@section('content')
<h2>Genarate Event</h2>
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
<form method="post" action="{{route('event.update',$event->id)}}" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input name="name" value="{{$event->name}}" placeholder=" fill up please" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input name="date"  value="{{$event->date}}"placeholder=" fill up please" type="date" class="form-control" id="date" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input name="location" value="{{$event->location}}" placeholder=" fill up please" type="text" class="form-control" id="location" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input name="contact"  value="{{$event->contact}}"placeholder=" fill up please" type="number" class="form-control" id="contact" aria-describedby="emailHelp">
 </div> 

  <div class="form-group">
    <label for="detail">Detail</label>
    <textarea name="detail" id="" cols="30" rows="5" class="form-control" id="detail" aria-describedby="emailHelp">{{$event->detail}}</textarea>
   
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" id="" cols="30" rows="5" class="form-control" id="detail" aria-describedby="emailHelp"
      onchange="readURL(this);">
   
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@stop