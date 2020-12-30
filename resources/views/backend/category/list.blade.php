@extends('backend.main')


@section('content')
<h1>Blood Group List</h1>


    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Blood Group Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
@foreach($categories as $key=>$category)

            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->status}}</td>

                <td>
                    <a class="btn btn-success" href="{{route('category.all.donors',$category->id)}}">View all Donor</a>

                </td>
            </tr>
@endforeach
            </tbody>



        </table>
        {{$categories->links()}}
    </div>

    @stop


