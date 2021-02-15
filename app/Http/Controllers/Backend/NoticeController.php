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
    $file_name='';
    if ($request->hasFile('image')) {

        $image = $request->file('image');
            $file_name = date('Ymdhms').'.' . $image->getClientOriginalExtension();
            $image->storeAs('notice', $file_name);
        }
       Notice::create([
            'name'                    => $request-> name,
            'description'             => $request-> description,
            'image'                   => $file_name

        ]);
        return redirect()-> back()->with('msg','Notice Generate Successfully');
    
    }
    public function showlist()
    {


        $notices= Notice::paginate(5);

        return view ('backend.notice.list',compact('notices'));
        



    }

    public function viewNotice($pid)
    {
    
    $single_notice=Notice::find($pid);
    return view('backend.notice.view',compact('single_notice'));



  }

    public function deleteNotice($pid)
    {
    $notice=Notice::find($pid);
    $notice->delete();
    return redirect()->back();
    }


    public function editNotice($pid){

        $notice = Notice ::find($pid);
        return view('backend.notice.edit',compact('notice'));
    }
    
    
    public function updateNotice(Request $request,$id)
    {
    $request-> validate([
        'name'                => 'required',
        'description'         => 'required'
    ]);
    $file_name='';
    if ($request->hasFile('image')) {

        $image = $request->file('image');
            $file_name = date('Ymdhms').'.' . $image->getClientOriginalExtension();
            $image->storeAs('notice', $file_name);
        }

       $notice  =  Notice::find($id);
       $notice->name         = $request->name;
       $notice->description  = $request->description;
       $notice->image        =$file_name;
       $notice->save();
       //dd($event);
    
       return redirect()-> back()->with('msg','Notice Updated Successfully');
    
    }


}
