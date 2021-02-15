@extends('backend.main')


@section('content')
<h2>Genarate Notice</h2>
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
<form method="post" action="{{route('store.notice')}}" enctype="multipart/form-data">

@csrf
  <div class="form-group">
    <label for="name"> Title </label>
    <input name="name"  placeholder=" fill up please" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>

  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="" cols="30" rows="5" class="form-control" id="description" aria-describedby="emailHelp"></textarea>
   
  </div>
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" name="image" id="" cols="30" rows="5" class="form-control" id="detail" aria-describedby="emailHelp"
      onchange="readURL(this);">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop