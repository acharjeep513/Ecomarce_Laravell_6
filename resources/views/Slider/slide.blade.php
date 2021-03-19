   
<form method="post"  action="{{ url ('/slidesAdd') }}" enctype="multipart/form-data">
   @csrf
   <button   href=" " class="  btn btn-info">show</button>
            </form>
<div class="row">

<br>
    <br>
    <div class="col-md-12">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
                <th align="center">    # </th>
                <th align="center">Order Id</th>
                <th align="center">Order Name</th>
                <th align="center">phone</th>
                <th>order Status</th>
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
             
                
                
                <td><a href="{{ url ('/slidesView/'.$slides->id) }}" class="btn  btn-info">View</a>
                    <a href="{{ url ('/slidesDelete/'.$slides->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>
