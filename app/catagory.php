<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    public function parent()
    {
       return $this->belongsTo( catagory::class,'parent_id');
    }
}
