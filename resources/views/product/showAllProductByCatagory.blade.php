@extends('include.footer2')
       
         @extends('layouts.app')




               @section('content')
<div class="container-fluid" align="center">
     
    <div class="row" style="margin-left: 100px">
        @foreach( $product ?? '' as $product)
        <div class="col-md-3" style="margin-left: 30px">
            <div class="card">
                <div class="card-header">
                    <img style="height: 98px;width:30px " src="{{asset('public/front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
                    
                </div>
                <form method="post"  action="{{url('/productSingle/'.$product->id)}}">
                   @csrf
                <div class="card-body">
                    <h3>{{$product->title}}</h3>
                    <h6>{{$product->description}}</h6>
                    <h5>Quantity::{{$product->quantity}}</h5>
                    <h5>Price::{{$product->price}}</h5>
                    <p><button href="#" class=" btn btn-warning" name="total6"><i class="fas fa-cart-plus "></i> Read more</button></p>
                </div>
                </form>
                
            </div>
            
        </div>
          @endforeach	
    </div>

</div>
            @endsection