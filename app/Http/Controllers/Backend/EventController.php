<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //
    public function showform()
    {

return view ('backend.event.addevent');

    }

    public function storeform(Request $request)
    {
    $request-> validate([
        'name'                => 'required',
        'date'                => 'required',
        'location'            => 'required',
        'contact'             => 'required',
        'detail'              => 'required',
    ]);
        Event::create([
            'name'             => $request-> name,
            'date'             => $request-> date,
            'location'         => $request-> location,
            'contact'          => $request-> contact,
            'detail'           => $request-> detail,
          
        ]);
        return redirect()-> back()->with('msg','Event added Successfully');
    
    }
    public function showlist()
    {

        $events= Event::paginate(5);

        return view ('backend.event.list',compact('events'));
        

    }
    public function deleteEvent($pid)
{
$event=Event::find($pid);
$event->delete();
return redirect()->back();
}

public function editevent($pid){

    $event = Event ::find($pid);
    return view('backend.event.edit',compact('event'));
}


public function updatevent(Request $request,$id)
{
$request-> validate([
    'name'                => 'required',
    'date'                => 'required',
    'location'            => 'required',
    'contact'             => 'required',
    'detail'              => 'required'
]);
   $event  =  Event::find($id);
   $event->name  = $request->name;
   $event->date  = $request->date;
   $event->location  = $request->location;
   $event->contact  = $request->contact;
   $event->detail  = $request->detail;
   $event->save();
   //dd($event);

   return redirect()-> back()->with('msg','Donor Updated Successfully');

}
public function viewevent($pid)
{

$single_event=Event::find($pid);
return view('backend.event.viewevent',compact('single_event'));

}
}