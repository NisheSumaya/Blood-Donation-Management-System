<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function showform()
    {

        return view ('backend.notice.addnotice');


    }
    public function storeform(Request $request)
    {
    $request-> validate([
        'name'                 => 'required',
        'description'          => 'required',

    ]);
       Notice::create([
            'name'                    => $request-> name,
            'description'             => $request-> description,
          
        ]);
        return redirect()-> back()->with('msg','Notice Generate Successfully');
    
    }
    public function showlist()
    {


        $notices= Notice::paginate(5);

        return view ('backend.notice.list',compact('notices'));
        



    }
}
