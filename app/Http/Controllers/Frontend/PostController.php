<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\CategoryController;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostInterest;
use App\Notifications\PostInterest as PostNotification;


class PostController extends Controller
{
    public function showform()
    {

        $posts = Category::all();
        return view('frontend.posts.postform',compact('posts'));

    }

    public function storefrom(Request $request)
    {
    $request-> validate([
        'name'              => 'required',
        'e_mail'            => 'required',
        'contact'           => 'required',
        'location'          => 'required',
        'date'              => 'required',
        'quantity'          => 'required',
        'detail'            => 'required',
        'category_id'       => 'required'

    
    
    
    
    ]);
         Post::create([
            'name'             => $request-> name,
            'e_mail'           => $request-> e_mail,
            'contact'          => $request-> contact,
            'category_id'      => $request-> category_id,
            'location'         => $request-> location,
            'date'             => $request-> date,
            'quantity'         => $request-> quantity,
            'detail'           => $request-> detail,
             'user_id'         =>auth()->user()->id,
        ]);
        return redirect()-> back()->with('msg','Post created Successfully');
        
    
    }
    public function getposts()
    {
       
        $posts=Post::with(['interseted'])->orderBy('id','desc')->get();

    

     return view('frontend.posts.allposts',compact('posts'));
    }
    public function viewpostDetails($id)
    {
    
    $post=Post::find($id);
    return view('frontend.posts.viewpost',compact('post'));
     }
public function getMypost()
{
    $id=auth()->user()->id;
$mypost = Post::where('user_id',$id)->orderby('id','desc')->get();
//dd($mypost);
return view ('frontend.posts.mypost',compact('mypost'));

}


public function interseted($id){

    PostInterest::updateOrcreate([
        'post_id'=>$id,
        'user_id'=>auth()->user()->id
    ]);

    $post = Post::findOrFail($id);
    $postUser = $post->user;
    $postUser->notify(new PostNotification(auth()->user(), $post));

    return redirect()->back();
}

}
