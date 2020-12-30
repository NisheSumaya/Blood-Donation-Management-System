@extends('backend.main')

@section('content')
<h1>Donor List: {{$category->name}}</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">SL/NO</th>
                <th scope="col">Donor Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($donors as $key=>$donor)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$donor->name}}</td>
                <td>{{$donor->status}}</td>
                <td>
                    <a href="{{route('donor.view',$donor->id)}}" class="btn btn-success">View</a>
                </td>
            </tr>
            @endforeach
            </tbody>



        </table>

    </div>

    @stop
