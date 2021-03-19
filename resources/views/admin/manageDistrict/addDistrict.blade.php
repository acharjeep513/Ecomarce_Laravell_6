      
                 @extends('include.footer2')

                  
                  @extends('layouts.app')
                 
                 @section('content')
             <div class="container" align="center">
             	<div class="row">
             		<h5 style="margin-left: 520px">Add District</h5>
             	<div class="col-md-12">
            
             
            <form method="post"  action="{{url('/districtAdd')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>district</label>
                    <input type="text" class="form-control" name="district" id="district"/>
                </div>
                <div class="form-group">
                    <label>division</label>
                    <input type="text" class="form-control" name="division" id="division"/>
                </div>
                

                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >ADD</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    </div>
    </div>
            @endsection

        
            