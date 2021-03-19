@extends('include.footer2')
       
         @extends('layouts.app')



             @section('content')


  <div class="container-fluid">   
    <div class="row">
        
             <div  class="col-md-9" style="margin-left: 20px">
              <div class="card">
              	<div class="card-header">
                   <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      @php
      $i=1;
      @endphp
          @foreach( $image ?? '' as $slides)
        <li data-target="#demo" data-slide-to="{{$i}}" class="{{$i == 1 ? 'active' : ''}}"></li>
        @php
        $i++;
        @endphp
       
             @endforeach
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      @php
      $i=1;
      @endphp
       @foreach( $image ?? '' as $slides)
        <div class="carousel-item {{ $i == 1 ? 'active' : ''}}">
            <img src="{{asset('front-end/Image'.$product->ProductImage->image)}}" alt="Denim Jeans" style="width:900px;height: 350px;margin-left: 70px">
            <h1>{{$product->ProductImage->image}}</h1>
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
            </div>
        </div>
         @php
        $i++;
        @endphp
          @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
    
   </div>





                   </div>
                   <form class="form-inline" action="{{url('cart')}}" method="post">
	               @csrf
                   <div class="card-body" align="center" >
                     <h1 class="title">{{$product->ProductImage->image}}</h1>
                    <h1 class="title">{{$product->title}}</h1>
                   <p class="price">{{$product->price}}</p>
                  <p>{{$product->description}}</p>
                  <input type="hidden" name="product_id" value="{{ $product->id }}">
                

                   <p>
                    <button type="button" class=" btn btn-warning" name="total6" onclick="addToCart({{ $product->id }})"><i class="fas fa-cart-plus "></i> ADD TO CART</button>
                  </p>

                   </div>
                   </form>
              </div>
            </div>

   


<script type="text/javascript">
  
   function addToCart(product_id)
   {

   // alert(product_id);
      $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
      });


       $.post( "http://localhost/authTest4/cart",
        { 

          product_id : product_id;

      })
        .done(function( data ) {
       alert( "Data Loaded: " + data );
  });
   }
</script>




















             <div class="col-md-2" >
             	<div class="card" style="height: 600px">
                   <h6>Delivery Options</h6>
                   <br>
                  
                   <h6>.Bank</h6>
               
                   <h6>.mobile banking</h6>
                   
                   <h6>.cash on delivary</h6>
                   
              </div>
             </div>


    </div>

   <div class="container-fluid">
    <div class="row" style="margin: 12px;margin-top: 35px;background:black;margin-left: 25px">
      <div class="col-md-4" style="margin-left: 450px">
        <div class="card" style="background: red">
          <div class="card-header">
            <h6 align="center" ><strong style="font-size: 25px">
             rating</strong></h6>
          </div>
          
        </div>
        
      </div>
      
    </div>


<div class="container-fluid">
  
    <div class="row">
        @foreach( $review ?? '' as $review)
         @php
             if($loop->index == 0){
             $total_price =0;
             $id=0;
           }
             $total_price += $review->rating;
             $id =$id+1;
             $rating = $total_price / $id;
  @endphp  
      <div class="col-md-2" style="margin-bottom: 30px">
          <div class="card-header" align="center">
                   <img src="{{asset('public/front-end/Image/a.jpg')}}" alt="Denim Jeans" style="width:100px;height: 100px">
                   <h3 class="name">{{$review->name}}</h3>
          </div>
          
      </div>

      <div class="col-md-10">    
                <div class="card-body" style=>
                    <p>Review:: {{$review->review}}</p>
                    <p>Rating::  {{$review->rating}}</p>
                   <p class="price">
                    </p>
                  <p></p>
                  
                   </div>
                    
      </div>
      
      
   
     @endforeach 
<h1></h1>
</div>
</div>

    <div class="row" style="margin: 12px;margin-top: 35px;background:black;margin-left: 25px">
    	<div class="col-md-4" style="margin-left: 450px">
    		<div class="card" style="background: red">
    			<div class="card-header">
    				<h6 align="center" ><strong style="font-size: 25px">
            May you like</strong></h6>
    			</div>
    			
    		</div>
    		
    	</div>
    	
    </div>



    <div class="row" style="margin-top: 10px;margin-left: 8px">
    	@foreach( $a ?? '' as $row)
    	@if($row->id !== $product->id)
        <div class="col-md-3">
    		<div class="card" >

    			<div class="card-header" align="center">
                   <img src="{{asset('public/front-end/Image/a.jpg')}}" alt="Denim Jeans" style="width:100%">
                </div>
               <form method="post"  action="{{url('/productSingle/'.$row->id)}}">
	               @csrf
                <div class="card-body" style=>
                    <p>{{$row->title}}</p>
                    <p> Description</p>
                   <p class="price">
                   	{{$row->description}}</p>
                  <p>{{$row->price}}</p>
                   <p><button href="#" class=" btn btn-warning" name="total6"><i class="fas fa-cart-plus "></i> Read more</button></p>
                   </div>
                     </form>
              </div>
    	</div>
    	
    	@endIf
    	
 @endforeach    
</div>
</div>




<script src="{{asset('js/jquery-3.4.1.js')}}"> </script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"> </script>

<script src="{{asset('js/bootstrap.js')}}"> </script>











            @endsection