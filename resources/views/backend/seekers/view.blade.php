@extends('backend.main')


@section('content')
<h2>View Seeker Details</h2>
<br>
<p>
<label for=""> Seeker Name:{{$single_seeker->username}}</label>
</p>
<p>
<label for=""> Email:{{$single_seeker->email}}</label>
</p>
<p>
<label for=""> Contact:{{$single_seeker->contact}}</label>
</p>
<p>
<label for=""> Address:{{$single_seeker->address}}</label>
</p>

@stop
