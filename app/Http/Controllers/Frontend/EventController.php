<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
{
    //
    public function getEvents()
    {  
        $events=Event::all(); 

     return view('frontend.event.eventshow',compact('events',));
    }
}
