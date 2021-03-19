<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ProductImage;


class product extends Model
{
   public function productImage(){
    	return $this->hasOne(ProductImage::class);
    }

    public function a(){
    	
    } 
 }
