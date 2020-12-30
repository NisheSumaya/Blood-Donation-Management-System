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
<h2>Add Blood Group</h2>
<form method="post" action="{{route('category.store')}}">

@csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input name="name"  placeholder=" fill up please" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>
  
  
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" id="" cols="30" rows="5" class="form-control" id="e_mail" aria-describedby="emailHelp"></textarea>
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop