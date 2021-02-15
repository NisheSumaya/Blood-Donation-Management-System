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
        $events=Event::orderBy('id','desc')->get(); 

     return view('frontend.event.eventshow',compact('events',));
    }
    public function viewEvent($id)
    {

        $event=Event::find($id);
        return view('frontend.event.eventview',compact('event'));


    }
}
