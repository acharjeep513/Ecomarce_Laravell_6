          @extends('layouts.app')
<div class="col-md-12">
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