<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function welcomeHome()
    {

return view ('welcome');

    }

    public function aboutus()
    {

return view ('frontend.about');

    }

    public function showgallery()
    {

return view ('gallery');

    }
    public function showcontact()
    {

return view ('contact');

    }

    public function adminLogin(){
        return view('backend.login.login');

    }
    public function loginProcess(Request $request){

        $login = $request->only('email', 'password');

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home.dashboard'));

    }else{
        return redirect()->back()->with('msg','Your creditional is Invalid');
    }
}
}