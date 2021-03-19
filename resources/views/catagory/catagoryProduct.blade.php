   
   
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
   @extends('layouts.app')
            <form method="post"  action="{{url('/CatagoryAddDatabase')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description"/>
                </div>
                <div class="form-group" >
                    <label>Parent Catagory</label>
                   <select class="form-control" name="parent_id">
             	@foreach($main_catagory as $catagory)
             	<option value="{{$catagory->id}}">{{$catagory->name}}</option>

             	@endforeach
             	</select>
             	 </div>
             	 <div>
                    <label>Image</label>

                        <div >
                             <input type="file" class="form-control" name="image" id="image"/>
                        </div>
                 </div>
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
            </div>
            </form>
        </div>
    </div>
