@extends('backend.main')


@section('content')
<h2>View Donor Details</h2>
<br>
<p>
<label for=""> Donor Name:{{$single_donor->name}}</label>
</p>
<p>
<label for=""> Password:{{$single_donor->password}}</label>
</p>
<p>
<label for=""> Email:{{$single_donor->e_mail}}</label>
</p>
<p>
<label for=""> Contact:{{$single_donor->contact}}</label>
</p>
<p>
<label for=""> Blood Group:{{$single_donor->category->name}}</label>
</p>
<p>
<label for=""> Address:{{$single_donor->address}}</label>
</p>

@stop
