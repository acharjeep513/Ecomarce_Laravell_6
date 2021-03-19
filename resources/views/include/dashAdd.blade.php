
<div class='container' >
    <div class="row">
        <div class="col-md-4">
             <h5 class="card-title">Catagory</h5>
           <div class="list-group">
     
          <a href="{{url('/dash')}}"  class="list-group-item   {{ Route::is('/dash') ? 'active' : ''}}">Dashdoard</a>
            <a href="{{url('/profileShow')}}"  class="list-group-item list-group-item-action">profile</a>
              <a href="{{url('/productShow')}}"  class="list-group-item list-group-item-action">logout</a>
    
</div>
        </div>
<div class="col-md-8">
    <h5 style="margin-left:200px" >                            Wellcome   {{$user->first_name .'    '.$user->last_name}}   </h5>
    <h5 style="margin-left:200px " >You can change your profile and every information</h5>
    <a style="margin-left:200px "  href="{{url('/profileShow')}}">Update profile</a>
 
    </div>  
</div>
</div>