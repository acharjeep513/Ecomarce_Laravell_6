
                 @extends('include.footer2')
         
        
         @extends('layouts.app')
            @section('content')



    <div class="container" align="center">
        <br/>
        <br/>
        <h4>Add Product</h4>
        <div class="card col-md-5">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post"  action="{{ url ('/ordershow/'.$order->id) }}" enctype="multipart/form-data">
                @csrf
           
            <div class="card-body">
                
               
               <div class="form-group">
                    <label> Id</label>
                    <input type="text" class="form-control" name="id" id="id" value="{{ $order->id}}"/>
                </div>
                
                <div class="form-group">
                    <label>User Id</label>
                    <input type="text" class="form-control" name="user_id" id="user_id" value="{{ $order->user_id}}"/>
                </div>
                 <div class="form-group">
                    <label>Ip address</label>
                    <input type="text" class="form-control" name="ip_address" id="ip_address" value="{{ $order->ip_address}}"/>
                </div>
                 <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $order->name}}"/>
                </div>

                     <div class="form-group">
                    <label>Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $order->phone}}"/>
                </div>



                <div class="form-group">
                    <label>shipping_address</label>
                    <input type="text" class="form-control" name="shiping_address" id="shiping_address" value="{{ $order->shiping_address}}"/>
                </div>

                <div class="form-group">
                    <label>email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $order->email}}"/>
                </div>

                <div class="form-group">
                    <label>massage</label>
                    <input type="text" class="form-control" name="massage" id="massage" value="{{ $order->massage}}"/>
                </div>


                   <div class="form-group">
                    <label>is_paid</label>
                    <input type="text" class="form-control" name="is_paid" id="is_paid" value="{{ $order->is_paid}}"/>
                </div>



                 <div class="form-group">
                    <label>is_completed</label>
                    <input type="text" class="form-control" name="is_completed" id="is_completed" value="{{ $order->is_completed}}"/>
                </div>
                   

                   <div class="form-group">
                    <label>is_seen_by_admin</label>
                    <input type="text" class="form-control" name="is_seen_by_admin" id="is_seen_by_admin" value="{{ $order->is_seen_by_admin}}"/>
                </div>
                 

                
            <button   href=" " class="  btn btn-info">show</button>
            </form>
            
           <div>
           
                </div>
            </div>
         
        </div>

    </div>

            @endsection

