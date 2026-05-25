<?php

namespace App\Models;
use App\Models\category;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function category(){
        return $this->belongsTo(category::class,'id');
    }
}
