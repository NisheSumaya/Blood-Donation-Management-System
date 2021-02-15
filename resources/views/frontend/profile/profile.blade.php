@extends('master.master')

@section('content')
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <h2  align = "center" >User Profile : {{$user->username}} 

    <a href="{{route('post.notify')}}"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="
    width: 20px;
    height: 20px;
    position: relative;
">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
</svg></a>
    <span style="
    font-size: 10px;
    padding: 2px 4px;
    background: red;
    color:white;

    font-family: sans-serif;
    border-radius: 50%;
    position: absolute;
">{{$user->notifications->count()}}</span>


            </h2>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('/assets/img/userpro.jpg')}}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{strtoupper($user->role)}}</h4>
                      <p >{{$user->username}} <br>
                      {{$user->address}}</p>
                    
                    </div>
                  </div>
                </div>
              </div>
             
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0"> Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      {{strtoupper($user->username)}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Status</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->status}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Contact</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->contact}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    {{$user->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Total Post</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   {{$post}}
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    </div>
    
@stop
