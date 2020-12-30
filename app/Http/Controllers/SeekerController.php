<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class SeekerController extends Controller
{
    public function showlist()
    {

     $seekers = User::where('role','=', 'seeker')->paginate(5);

        return view('backend.seekers.list',compact('seekers'));
    }

    public function viewseeker($pid)
    {
    
    $single_seeker=User::find($pid);
    return view('backend.seekers.view',compact('single_seeker'));
    
    }
    public function deleteseeker($pid)
    {
    $seeker=User::find($pid);
    $seeker->delete();
    return redirect()-> back();

}
}
