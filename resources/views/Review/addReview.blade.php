
 @extends('include.footer2')
 
         @extends('layouts.app')
         @section('content')


    <div class="container" align="center">
        <br/>
        <br/>
        <h4>{{$a}}</h4>
        <div class="card col-md-10">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <form method="post"  action="{{url('addReview/'.$cart->id)}}" enctype="multipart/form-data">
                @csrf

            <div class="card-body">
               <div class="card-body">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="id" id="id" value="{{$cart->id}}" />
                </div>

                <div class="card-body">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="product_id" id="product_id" value="{{$cart->product_id}}" />
                </div>
                <div class="card-body">
                <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="user_id" id="user_id" value="{{$cart->user_id}}" />
                </div>

                <div class="card-body">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="ip_address" id="ip_address" value="{{$cart->ip_address}}"/>
                </div>

                 <div class="card-body">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="order_id" id="order_id" value="{{$cart->order_id}}"/>
                </div>
                <div class="card-body">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" name="product_quantity" id="product_quantity" value="{{$cart->product_quantity}}"/>
                </div>
            
                


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label>Review</label>
                    <input type="text" class="form-control" name="description" id="description"/>
                </div>
                 <div class="form-group">
                   
                    <input type="hidden" class="form-control" name="aa" id="aa" value="{{$a}}" />
                </div>
                <div class="form-group">
                    <label>Rating</label>
                    <input type="text" class="form-control" name="Rating" id="Rating"/>
                </div>
                </div>

                
                 <div class="form-group">
                    <label>Image</label>
                    <div class="row">
                        <div class="col-md-12" style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                    </div
                    <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                  
               
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-success" style="height: 60px;width: 925px;margin-top: 30px"> <i class="fas fa-cart-plus"></i >Add Product</button>
                </div>
            </div>
            </form>
        </div>
    </div>
       @endsection