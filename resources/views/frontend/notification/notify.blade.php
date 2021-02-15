@extends('master.master')
@section('content')
 @foreach($notifications as $notification)

 <a href="{{route('notification.details',$notification->id)}}"><div style="
    border: 1px solid #ef9c9c;
    margin-bottom:20px">
    <div class="notification-header" style="
    background: #ffdbdb;
    color: #ec3333;
    border-bottom: 1px solid #e67575;
    padding: 0 15px;">
    <div style="
    display: flex;
    justify-content: space-between;">
    <div>Notification</div>
    <div>{{ $notification->created_at->diffForHumans()}}</div>
    </div>
    </div>
    <div class="notification-body" style="
    padding: 5px 15px;
    color: gray;">
 {{ ($notification->data['message']) }}
    </div>
</div>
</a>
@endforeach


@stop