    @extends('layouts.app')


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
           
            <div class="card-body">
                <form method="post"  action="{{ url ('/slidesEdit/'.$slides->id) }}" enctype="multipart/form-data">
                @csrf
               
                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $slides->title}}"/>
                </div>
                <div class="form-group">
                    <label>image</label>
                    <input type="text" class="form-control" name="image" id="image" value="{{ $slides->image}}"/>
                </div>
                 <div class="form-group">
                    <label>button_text</label>
                    <input type="text" class="form-control" name="button_text" id="button_text" value="{{ $slides->button_text}}"/>
                </div>
                 <div class="form-group">
                    <label>button_link</label>
                    <input type="text" class="form-control" name="button_link" id="button_link" value="{{ $slides->button_link}}"/>
                </div>
                
            <button   href=" " class="  btn btn-info">show</button>
            </form>
            
           <div>
           
                </div>
            </div>
         
        </div>

    </div>

      
    