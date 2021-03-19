
<div class="row">
<div class="col-md-4">
<div class="list-group">
  <a href="{{url('/Catagoryadd')}}"  class="list-group-item list-group-item-action">Add Catagory</a>
  <a href="#" class="list-group-item list-group-item-action">TV & Home Appliances</a>
  <a href="#" class="list-group-item list-group-item-action">Health & Beauty</a>
  <a href="#" class="list-group-item list-group-item-action">Babies & Toys</a>
  <a href="#" class="list-group-item list-group-item-action">Groceries & Pets</a>
  <a href="#" class="list-group-item list-group-item-action">Groceries & Pets</a>
  <a href="#" class="list-group-item list-group-item-action">Women's Fashion</a>
  <a href="#" class="list-group-item list-group-item-action">Men's Fashion</a>
  <a href="#" class="list-group-item list-group-item-action">Watches & Accessories</a>
  <a href="#" class="list-group-item list-group-item-action">Sports & Outdoor</a>
</div>
        </div>
<br>
    <br>
    <div class="col-md-8">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">    PRODUCT id</th>
                <th align="center">TITLE</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
       

            @foreach( $catagory ?? '' as $row)
            <tr align="center" >
                <td>{{$row->id}}</td>
                <td>
                	@if($row->parent_id == null)
                	Primary catagory
                	@else{{$row->parent->name}}
                	@endif
                </td>
             
                
                
                <td><a href="{{ url ('/catagoryview/'.$row->id) }}" class="btn  btn-info">View</a>
                    <a href="{{ url ('/catagoryDelete/'.$row->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>
</div>
</div>
  @extends('layouts.app')