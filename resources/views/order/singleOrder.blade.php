 



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
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $order->name
                }}"/>
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $order->id}}"/>
                </div>
                <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $order->user_id}}"/>
                </div>
                 <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $order->name}}"/>
                </div>
                 <div class="form-group">
                    <label>description</label>
                    <input type="text" class="form-control" name="description" id="description" value="{{ $order->user_id}}"/>
                </div>
                <form method="post"  action="{{ url ('/ordershow/'.$order->user->id) }}" enctype="multipart/form-data">
                @csrf
            <button   href=" " class="  btn btn-info">show</button>
            </form>
            
           <div>
           
                </div>
            </div>
         
        </div>

    </div>

      
    