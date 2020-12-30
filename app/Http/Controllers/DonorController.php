<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    'name'                           => 'required',
    'e_mail'                         => 'required',
    'address'                        => 'required',
    'contact'                        => 'required',
    'password'                       => 'required',
    'category_id'                    => 'required'




]);
    Donor::create([
        'name'             => $request-> name,
        'e_mail'           => $request-> e_mail,
        'category_id'      => $request-> category_id,
        'address'          => $request-> address,
        'contact'          => $request-> contact,
        'password'         => $request-> password,

    ]);
    return redirect()-> back()->with('msg','Donor added Successfully');

}
public function showlist(){

    $donors=Donor::with('category')->paginate(5);

    return view('backend.donor.list',compact('donors'));

}
public function deletedonor($pid)
{
$donor=Donor::find($pid);
$donor->delete();
return redirect()-> back();
}
public function viewdonor($pid)
{

$single_donor=Donor::find($pid);
return view('backend.donor.view',compact('single_donor'));

}
public function editdonor($pid)
{

    $donor=Donor::find($pid);
return view('backend.donor.edit',compact('donor'));
return redirect()-> back()->with('msg','Donor Updated Successfully');

}


public function updatedonor(Request $request,$id)
{

    $request-> validate([
        'name'              => 'required',
        'e_mail'            => 'required',
        'address'           => 'required',
        'contact'           => 'required',
        'password'          => 'required',]);

        $donor=Donor::find($id);
    $donor->update([
            
            'name'      => $request-> name,
            'e_mail'    => $request-> e_mail,
            'address'   => $request-> address,
            'contact'   => $request-> contact,
            'status'    =>$request-> status,
            'password'  => $request-> password,
    
        ]);
        return redirect()-> back()->with('msg','Donor Updated Successfully');
    


}
}
