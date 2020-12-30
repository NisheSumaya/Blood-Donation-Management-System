<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notice;


class NoticeController extends Controller
{
    //
    public function getNotices()
    {
       
        $notices=Notice::all();
       

     return view('frontend.notice.allNotice',compact('notices'));
    }
}
