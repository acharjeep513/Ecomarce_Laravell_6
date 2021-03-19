
<br>
    <br>
<div class="container" align="center">
    <br>
    <br>
    <img class="container" align="center" width="1110" height="220" src="{{asset('front-end/Image1582787713.jpg')}}">
<br>
    <br>
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">    PRODUCT id</th>
                <th align="center">TITLE</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
       

            @foreach( $product ?? '' as $row)
            <tr align="center" >
                <td>{{$row->id}}</td>
                <td>{{$row->title}}</td>
             
                
                
                <td><a href="{{ url ('/adminProductView/'.$row->id) }}" class="btn  btn-info">Edit</a>
                <a href="#" class="btn btn-info " data-toggle="modal" data-target="#myModal" >  Delete</a>
                     
    <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    < Modal content
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <p>Sure , you want to delete?</p>
        <button name="do" type="submit" href="{{ url ('/productShow') }}" class="form-control  btn btn-info"> <i class="fas fa-cart-plus"></i >No</button>
        <form method="post"  action="{{ url ('/productdelete/'.$row->id) }}" >
            {{ csrf_field() }}  
             
            <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Delete</button> 
        
      </form>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>

  @extends('layouts.app')