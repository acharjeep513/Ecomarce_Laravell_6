@extends('include.footer2')

 @extends('layouts.app')
 
                 @section('content')

     <div class="container" >
         <div class="row">
             <div class="col-md-6" style="border-bottom: 50px">
                 <form method="post"  action="{{ url ('/adminManageSlider') }}" enctype="multipart/form-data">
   @csrf
   <button   href=" " class="  btn btn-info" style="width: 300px;border-bottom: 50px">Slider Managment</button>
            </form>
             </div>

<div class="col-md-6">
                 <form method="post"  action="{{ url ('/adminAddSlider') }}" enctype="multipart/form-data">
   @csrf
   <button   href=" " class="  btn btn-info" style="width: 300px">Add Slider</button>
            </form>
             </div>




         </div>
     </div>    
<br>
               


<div class="row">

<br>
    <br>
    <div class="col-md-12">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
                <th align="center">    # </th>
                <th align="center">Slider Id</th>
                <th align="center">Slider Title</th>
                <th align="center">Image</th>
                <th align="center">Button-text</th>
                <th align="center">Button-link</th>
             
                <th>Action</th>
            </tr>
       


            @foreach( $slides ?? '' as $slides)
            <tr align="center" >
                <td>{{$loop->index + 1}}</td>
                <td>LE{{$slides->id}}</td>
                <td>LE{{$slides->title}}</td>
                <td>LE{{$slides->button_text}}</td>
                <td>
                    <td>LE{{$slides->button_link}}</td>
                </td>
             
                
                
                <td><a href="{{ url ('/adminEditedSlider/'.$slides->id) }}" class="btn  btn-info">View</a>
                    <a href="{{ url ('/adminDeleteSlider/'.$slides->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>

      
    
            @endsection