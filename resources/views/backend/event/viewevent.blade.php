@extends('backend.main')


@section('content')
<h2>View Event Details</h2>
<br>
<p>
<label for=""> Event Name:{{$single_event->name}}</label>
</p>
<p>
<label for=""> Date:{{$single_event->date}}</label>
</p>
<p>
<label for=""> Location:{{$single_event->location}}</label>
</p>
<p>
<label for=""> Contact:{{$single_event->contact}}</label>
</p>
<p>
<label for=""> Detail:{{$single_event->detail}}</label>
</p>
@stop
