<?php

namespace App\Http\Controllers\Backend;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\PostInterest;
use App\Models\Donor;
use App\Models\User;
use App\Models\Notice;
use App\Models\Event;
use App\Models\Post;


class DashboardController extends Controller
{
    public function showdashboard()
    {   
        $post         = Post::count('id');
        $donor        = User::count('id');
        $seeker       = User::where('role','=','seeker')->count('id');
        $notice       = Notice::count('id');
        $event        = Event::count('id');
        $notify       = Notification::count('id');
        $interest     = PostInterest::count('id');
        $dailyseeker  = User::where('role','=','seeker')->whereDate('created_at', '=', now()->today())->count('id');
        $dailydonor   = User::where('role','=','donor')->whereDate('created_at', '=', now()->today())->count('id');
        $dailypost    = Post::whereDate('created_at', '=', now()->today())->count('id');
        $dailyinterest= PostInterest::whereDate('created_at', '=', now()->today())->count('id');
        $dailynotify  = Notification::whereDate('created_at', '=', now()->today())->count('id');
        
        

        return  view ('backend.dashboard',[
            'total_post'    =>$post,
            'total_donor'   =>$donor,
            'total_seeker'  =>$seeker,
            'total_notice'  =>$notice,
            'total_event'   =>$event,
            'total_notify'  =>$notify,
            'total_interest'=>$interest,
            'total_Dseekers'=>$dailyseeker,
            'total_Ddonor'  =>$dailydonor,
            'total_Dpost'   =>$dailypost,
            'total_Ipost'   =>$dailyinterest,
            'total_Dnotify' =>$dailynotify,


             

        ]);

    }
    public function showPost()
    {
        $posts=Post::all(); 
        return view ('backend.post.viewpost',[
            'posts'=>$posts
        ]);

    }
   
}