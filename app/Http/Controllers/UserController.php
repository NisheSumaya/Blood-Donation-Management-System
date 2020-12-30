<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function Showregform()
    {
        $seekers = Category::all();
        return view('registration',compact('seekers'));

    }


    public function storefrom(Request $request)
{
  
$request-> validate([
    'username'          => 'required',
    'email'             => 'required',
    'password'          => 'required',
    'contact'           => 'required',
    'role'              => 'required',
    'address'           => 'required',
    'category_id'       => 'required'

]);
   User::create([
        'username'             => $request-> username,
        'email'                => $request-> email,
        'password'             => bcrypt($request->password),
        'contact'              => $request-> contact,
        'category_id'          => $request-> category_id,
        'role'                 => $request-> role,
        'address'              => $request-> address,
       

    ]);
    return redirect()-> back()->with('msg','Registration Successfull');

}
public function loginform()
    {

        return view('login');

    }

public function login(Request $request)
    {
        $request->validate([
            'username'=>'required',
            'password'=>'required',
        ]);
            //dd($request->all());
        $credentials = $request->except('_token');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect(route('welcome.home'))->with('message','Login Success!');
        }else
        {
            return redirect()->back()->withErrors('Invalid Credentials');
        }
}
public function logout()
    {
        Auth::logout();
        return redirect()->back()->with('message','Logout Success!');
    }
    public function viewprofile()
{    $post = Post::where('user_id',auth()->user()->id)->count('id');
     $user = User::where('id',auth()->user()->id)->first();

   return view ('frontend.profile.profile',compact('user','post'));
              

}
}