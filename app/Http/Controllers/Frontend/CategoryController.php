<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getDonors($id)
    {
        $category = Category :: find($id);
        $donors=Donor::where('category_id',$id)->get();

        return view('frontend.donor.donor_under_category',compact('donors','category'));
    }
}
