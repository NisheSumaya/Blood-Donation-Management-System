@extends('master.master')

@push('css')

<link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">

@endpush

@section('content')


<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    <h2>
                                    Post Details
                                    </h2>
                                    <p class="proile-rating"> <span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

        
                <div class="row">
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p > {{$post->name}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->e_mail}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->contact}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->category->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Quantity</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->quantity}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->location}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->date}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Details</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$post->detail}}</p>
                                            </div>
                                        </div>
                                        
                                        
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>

@endsection