@extends('master.master')
@section('content')


@section('content')
<h2>Post Creation</h2>
<!DOCTYPE html>
<html>
<head>
<style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 8px 10px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
</head>
<body>


</body>
</html>

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
<form method="post" action="{{route('post.store')}}">

@csrf
  <div class="form-group">
    <label for="name"> Name</label>
    <input name="name"  placeholder=" fill up please" type="text" class="form-control" id="name" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="e_mail">Email</label>
    <input name="e_mail"  placeholder=" fill up please" type="email" class="form-control" id="e_mail" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input name="contact"  placeholder=" fill up please" type="number" class="form-control" id="contact" aria-describedby="emailHelp">
 </div> 
 <div class="form-group">
    <label for="">Blood Group</label>
    <select name="category_id" id=""class="form-control">
     @foreach($posts as $post)
      <option value="{{$post->id}}">{{ $post->name}}</option>
     @endforeach
    </select>
 </div>   
 

  <div class="form-group">
    <label for="location">Location</label>
 <input   name="location"  placeholder=" fill up please" type="text" class="form-control" id="location" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="date">Date</label>
    <input name="date"  placeholder=" fill up please" type="date" class="form-control" id="date" aria-describedby="emailHelp">
   
  </div>   

 <div class="form-group">
    <label for="quantity">Quantity</label>
    <input name="quantity" id="" cols="30" rows="5" class="form-control" id="quantity" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="detail">Details</label>
    <textarea name="detail" id="" cols="30" rows="5" class="form-control" id="detail" aria-describedby="emailHelp"></textarea>
   </div>
  <button type="submit" class="btn btn-success">Post</button>
</form>

@stop