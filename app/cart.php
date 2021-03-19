<?php

namespace App;
use Auth;
use App\User;
use App\product;
use App\review;
use App\order;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    public $fillable = [
       'product_id','user_id','ip_address','order_id', 'product_quantity',
    ];

    public function user()
    {
       return $this->belongsTo(User::class);
    }

    public function product()
    {
       return $this->belongsTo(product::class);
    }


    public function review()
    {
       return $this->belongsTo(review::class);
    }

    public function order()
    {
       return $this->belongsTo(order::class);
    }

    public static function total()
    {
       
       if(Auth::check()){

      $carts=cart::orWhere('user_id',Auth::id())
   	             ->get();
       }
       else{
       
       	$carts=cart::Where('ip_address',request()->ip())
                   ->get();
       

       }

       $total_item=0;
     
       foreach ($carts as $cart) {
        $total_item +=$cart->product_quantity;
   
       }

       return $total_item;
    }
}
