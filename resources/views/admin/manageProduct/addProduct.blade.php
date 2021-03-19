
 @extends('include.footer2')
 
         @extends('layouts.app')
         @section('content')


    <div class="container" align="center">
        <br/>
        <br/>
        <h4>Add Product</h4>
        <div class="card col-md-10">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


            <form method="post"  action="{{url('/adminadd')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" name="title" id="title"/>
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description"/>
                </div>
                <div class="form-group">
                    <label>price</label>
                    <input type="text" class="form-control" name="price" id="price"/>
                </div>
                </div>
                <div class="form-group">
                    <label>quantity</label>
                    <input type="text" class="form-control" name="quantity" id="quantity"/>
                </div>
                 <div class="form-group">
                    <label>slug</label>
                     <select class="form-control" name="slug" id="slug">
                                   <option>
                                       Please select your slug
                                   </option>
                                   @foreach($catagory as $catagory)
                                   <option value="{{$catagory->name}}">{{$catagory->name}}</option>
                                   @endforeach
                               </select>
                </div>
                 <div class="form-group">
                    <label>Image</label>
                    <div class="row">
                        <div class="col-md-12" style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                    </div
                    <div class="col-md-12"style="margin: 10px">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                  
               
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-success" style="height: 60px;width: 925px;margin-top: 30px"> <i class="fas fa-cart-plus"></i >Add Product</button>
                </div>
            </div>
            </form>
        </div>
    </div>
       @endsection