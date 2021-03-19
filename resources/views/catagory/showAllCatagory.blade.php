@extends('include.footer2')
       
         @extends('layouts.app')




               @section('content')
<div class="container-fluid">
    

    <div class="row">
    @foreach( $catagory ?? '' as $catagory)
       
       
             
    	<div class="col-md-3" style="margin-top: 10px">
    		<div class="card" style="height: 100px">
    			<div class="row">
    				<div class="col-md-5" style="height: 100%">
    					<img style="height: 98px;width:30px " src="{{asset('public/front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
    				</div>
    				<div class="col-md-7">
    					<form method="post"  action="{{url('/allProduct/'.$catagory->id)}}" >
    	                @csrf
                        <button href="#"  class="list-group-item list-group-item-action" style="height: 60px;margin: 20px;background:'black'"> {{$catagory->name}}</button>
                        </form>
    					
    				</div>
    				
    			</div>
    			 
    		</div>
    		
    	</div>

    @endforeach

    	
    </div>
 
</div>
            @endsection