
<div class="row">
	




<div class="col-md-4" >
<h5 class="card-title" align="center">Catagory</h5>
           <div class="list-group">


          @foreach( $catagory ?? '' as $row)
          @if($row->id == 10)
          <a href="{{url('/allCatagory')}}"  class="list-group-item list-group-item-action" style="height: 40px;margin: 3px;background:'black'"> More Catagory</a>

             
          @endIf
          @if($row->id < 10)
          <form method="post"  action="{{url('/allProduct/'.$row->id)}}" >
    	                @csrf
            <button  class="list-group-item list-group-item-action" style="height: 40px;margin: 3px;background:'black'" align="center">{{$row->name}}</button>
          </form>
           @endIf
            @endforeach


     
         
      
</div>
</div>


<div class="col-md-8">
 <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
    	    @foreach( $slides ?? '' as $slides)
        <li data-target="#demo" data-slide-to="{{$loop->index}}" class="{{$loop->index == 0 ? 'active' : ''}}"></li>
       
             @endforeach
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
    	 @foreach( $slides ?? '' as $slides)
        <div class="carousel-item {{$loop->index == 0 ? 'active' : ''}}">
            <img height="500" src="{{asset('public/front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
            <div class="carousel-caption d-none d-md-block">
            	<h5></h5>
            </div>
        </div>
        
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
    </div>  
</div>
</div>