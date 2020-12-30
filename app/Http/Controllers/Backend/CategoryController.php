<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Donor;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showform()
    {
    return view('backend.category.add');

    }
public function storefrom(Request $request)
{
$request-> validate([
    'name'              => 'required',




]);
    Category::create([
        'name'      => $request-> name,
       
        'description'   => $request-> description,

    ]);
    return redirect()-> back()->with('msg','Category added Successfully');

}
public function showlist(){
 $categories= Category::paginate(5);

return view ('backend.category.list',compact('categories'));

}
public function getAllDonors($id)

    {
    


        $category=Category::find($id);

        $donors=Donor::where('category_id','=',$id)->get();
        //select * from products where category_id=$id;

        return view('backend.category.view',compact('donors','category'));
    }
}
