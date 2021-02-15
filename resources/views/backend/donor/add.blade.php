@extends('backend.main')


@section('content')
<h2>Add Doner</h2>
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
<form method="post" action="{{route('donor.store')}}">

@csrf
  <div class="form-group">
    <label for="username"> Name</label>
    <input name="username"  placeholder=" fill up please" type="text" class="form-control" id="username" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input name="password"  placeholder=" fill up please" type="password" class="form-control" id="password" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email"  placeholder=" fill up please" type="email" class="form-control" id="email" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="contact">Contact</label>
    <input min="0" oninput="this.value = Math.abs(this.value)" name="contact"  placeholder=" fill up please" type="number" class="form-control" id="contact" aria-describedby="emailHelp">
 </div> 
 <div class="form-group">
    <label for="">Blood Group</label>
    <select name="category_id" id=""class="form-control">
     @foreach($donors as $donor)
      <option value="{{$donor->id}}">{{ $donor->name}}</option>
     @endforeach
    </select>
 </div>   

  
  <div class="form-group">
    <label for="address">Address</label>
    <textarea name="address" id="" cols="30" rows="5" class="form-control" id="e_mail" aria-describedby="emailHelp"></textarea>
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop