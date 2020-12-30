<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\softDeletes;

class Donor extends Model
{
      protected $guarded=[];
       // use softDeletes;
   
       public function category()
       {
           return $this->belongsTo(Category::class);
       }
}
