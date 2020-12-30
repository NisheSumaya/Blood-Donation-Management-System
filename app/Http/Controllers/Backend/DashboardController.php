<?php

namespace App\Http\Controllers\Backend;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\User;
use App\Models\Notice;
use App\Models\Post;

class DashboardController extends Controller
{
    public function showdashboard()
    {   
        $post = Post::count('id');
        $donor = Donor::count('id');
        $seeker = User::where('role','=','seeker')->count('id');
        $notice = Notice::count('id');
        

        return  view ('backend.dashboard',[
            'total_post'=>$post,
            'total_donor'=>$donor,
            'total_seeker'=>$seeker,
            'total_notice'=>$notice,
             

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