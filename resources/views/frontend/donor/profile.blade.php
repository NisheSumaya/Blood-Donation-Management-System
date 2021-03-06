@extends('master.master')

@push('css')

<link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">

@endpush

@section('content')


<div class="container emp-profile">
            <form method="post">
        

        
                <div class="row">
                    <div class="col-md-4">
                    <div style="margin-top:40px">
                   <img src="http://localhost/bdms/public/assets/img/profile.webp" style="
    width: 300px;
    height: 300px;
">
                   </div>
                    </div>
                    <div class="col-md-8">
                    <div class="profile-head">
                                    <h5>
                                       
                                    </h5>
                                    <h2>
                                    Donor Information
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
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p > {{$donor->username}} </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$donor->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Contact</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$donor->contact}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Blood Group</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$donor->category->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Covid Certificate</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$donor->covid_certificate}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$donor->address}}</p>
                                            </div>
                                        </div>
                                        
        
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>           
        </div>

@endsection