
                 @extends('include.footer2')
         
        
         @extends('layouts.app')
            @section('content')
            
           

<div class='container' >
    <div class="row" style="height: 65px;border-top: 10px">
      <div class="col-md-12">
        <h5 align="center">Slider Managment</h5>
      </div>
    </div>
    <div class="row">
        <div class="col-md-4" >
             <h5 class="card-title" align="center">Catagory</h5>
           <div class="list-group">
     
          <a href="{{url('/adminAddSlider')}}"  class="list-group-item list-group-item-action" style="height: 60px;margin: 20px;background:'black'">Add slider</a>
          <a href="{{url('/adminShowSlider')}}"  class="list-group-item list-group-item-action"style="height: 60px;margin: 20px">Show slider</a>
          <a href="{{url('/productShow')}}"  class="list-group-item list-group-item-action"style="height: 60px;margin: 20px"></a>
          <a href="{{url('/productShow')}}"  class="list-group-item list-group-item-action"style="height: 60px;margin: 20px"></a>
          <a href="{{url('/productShow')}}"  class="list-group-item list-group-item-action"style="height: 60px;margin: 20px"></a>
      
</div>
        </div>
<div class="col-md-8">
 <div id="demo" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img height="500" src="{{asset('public/front-end/Image/a.jpg')}}" alt="Los Angeles" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="500" src="{{asset('public/front-end/Image/a.jpg')}}" alt="Chicago" class="w-100">
        </div>
        <div class="carousel-item">
            <img height="500" src="{{asset('public/front-end/Image/a.jpg')}}" alt="New York" class="w-100">
        </div>
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
            @endsection