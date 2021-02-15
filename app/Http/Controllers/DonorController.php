<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donor;
use App\Models\Category;
use App\Models\Backend\CategoryController;


class DonorController extends Controller
{
    public function showform()
    {

        $donors = Category::all();
    return view('backend.donor.add',compact('donors'));

    }
public function storefrom(Request $request)
{
$request-> validate([
    'username'                       => 'required',
    'email'                          => 'required',
    'address'                        => 'required',
    'contact'                        => 'required',
    'password'                       => 'required',
    'category_id'                    => 'required'




]);
    User::create([
        'username'         => $request->username,
        'email'            => $request->email,
        'category_id'      => $request->category_id,
        'address'          => $request->address,
        'contact'          => $request->contact,
        'password'         => bcrypt($request->password),
        'role'             =>'donor'

    ]);
    return redirect()-> back()->with('msg','Donor added Successfully');

}
public function showlist(){

    $donors=User::with('category')->where('role','=','donor')->paginate(5);

    //dd($donors);

    return view('backend.donor.list',compact('donors'));

}
public function deletedonor($pid)
{
$donor=User::find($pid);
$donor->delete();
return redirect()-> back();
}
public function viewdonor($pid)
{

$single_donor=User::find($pid);
return view('backend.donor.view',compact('single_donor'));

}
public function editdonor($pid)
{

    $donor=User::find($pid);
return view('backend.donor.edit',compact('donor'));
return redirect()-> back()->with('msg','Donor Updated Successfully');

}


public function updatedonor(Request $request,$id)
{
//dd($request->all());
    $request-> validate([

        'username'          => 'required',
        'email'             => 'required',
        'address'           => 'required',
        'contact'           => 'required',
        'password'          => 'required',]);

        $donor=User::find($id);
    $donor->update([
            
            'username'  => $request-> username,
            'email'     => $request-> email,
            'address'   => $request-> address,
            'contact'   => $request-> contact,
            'status'    =>$request-> status,
            'password'  => bcrypt($request->password),
    
        ]);
        return redirect()-> back()->with('msg','Donor Updated Successfully');
    


}

public function showAlldonor(){

    $alldonors=User::with('category')->where('role','=','donor')->paginate(5);

    //dd($donors);

    return view('frontend.donor.alldonor',compact('alldonors'));

}
}
