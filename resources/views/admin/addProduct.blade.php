


<div class="list-group">
    <h20>add </h20>
 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Division<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/division')}}" 
                                      >
                                        {{ __('ADD DIVISION') }}
                                    </a>

                                    <a class="dropdown-item" href="{{url('/divisionShow')}}">
                                        {{ __('MANAGE DIVISION') }}
                                    </a>

                                    <form  action="#" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

 <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    District<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{url('/district')}}" 
                                      >
                                        {{ __('ADD district') }}
                                    </a>

                                    <a class="dropdown-item" href="{{url('/districtShow')}}">
                                        {{ __('MANAGE District') }}
                                    </a>

                                    <form  action="#" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>

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
                    <label>Image</label>
                    <div class="row">
                        <div class="col-md-12">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div>
                        <div class="col-md-12">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                    </div
                    <div class="col-md-12">
                             <input type="file" class="form-control" name="Image[]" id="Image"/>
                        </div> 
                    </div
                </div>
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
            </div>
            </form>
        </div>
    </div>