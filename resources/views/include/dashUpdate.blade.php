  
    <h1 style="margin-left:400px" >                            Wellcome   {{$user->first_name .'    '.$user->last_name}}   </h1>
    <h5 style="margin-left:400px " >You can change your profile and every information</h5>
    
    <div style="margin-right: 400px, margin-left:400px" class="card-body">
     
  <form method="post"  action="{{url('/profileEdited/'.$user->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div style=" margin-left:200px" class="col-md-8">
                
                <div class="form-group">
                    <label>first Name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $user->first_name }}" />
                </div>
                 <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" value="{{$user->last_name}}" />
                </div>


                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $user->email}}"/>
                </div>

                <div class="form-group">
                    <label>phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $user->phone}}"/>
                </div>

                <div class="form-group">
                    <label>street address</label>
                    <input type="text" class="form-control" name="street_address" id="street_address" value="{{ $user->street_address}}"/>
                </div>
                
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
            </div>
            </form>
            </div>
            </div>