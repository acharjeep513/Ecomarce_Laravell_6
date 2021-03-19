<?php
use App\cart;
?>
<br>
    <br>
<div class="container" align="center">
    <br>
    <br>
    <img class="container" align="center" width="1110" height="220" src="{{asset('front-end/Image1582787713.jpg')}}">
<br>
    <br>
    <table class="table table-bordered table-hover table-striped">
      <thead>
            <tr align="center">
          
                <th align="center">   No </th>
                <th align="center">Product Title</th>
                <th>Product Quantity</th>
                <th>Unit price</th>
                <th>Total price</th>
                <th>
                 Action
                </th>
            </tr>
       

      </thead>
      <tbody>
      
       @foreach( $carts  as $row)
        <tr>
          <td> {{$loop->index +1}}</td>
           <td> {{$row->product->title}}</td>
          <td> 
              <form class="form-inline" action="{{url('cartUpdate/'.$row->id)}}"  method="post">
                    @csrf
                    <input type="number" name="product_quantity" value="{{ $row->product_quantity }}"   class="form-control"> 
                    <button type="submit" class="btn btn-info">Update</button>
                  </form>

          </td>
          <td> {{$row->product->price}} </td>
           <td> 
           @php
             if($loop->index == 0){
             $total_price =0;
           }
             $total_price += $row->product->price * $row->product_quantity;
          @endphp
           {{ $row->product->price * $row->product_quantity }}  </td>
          
           
           <td> 
              <form class="form-inline" action="{{url('cartDelete/'.$row->id)}}"  method="post">
                    @csrf
                    <input type="hidden" id="cart_id" "> 
                    <button type="submit" class="btn btn-info">Delete</button>
                  </form>

          </td>
        </tr>
        
        @endforeach

        <tr>
          <td colspan="3"></td>
          <td> Total amount</td>
          <td> </td>
        </tr>
      </tbody>
        </table>
    <div class="float-right" >
      <a href="{{url('/product')}}" class="btn btn-info btn-lh ">Continue shoping</a>
      <a href="{{url('checkoutData')}}" class="btn btn-info btn-lh ">Checkout</a>
    </div>

</div>

