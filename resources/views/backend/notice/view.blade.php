@extends('backend.main')


@section('content')
<h2>View Notice Details</h2>
<br>
<p>
<label for=""> Notice Title :{{$single_notice->name}}</label>
</p>
<p>
<label for=""> Description:{{$single_notice->description}}</label>
</p>
<p>
<img src="{{asset('uploads/notice/'.$single_notice->image)}}" height="200px" weight="200px">
</p>
@stop
