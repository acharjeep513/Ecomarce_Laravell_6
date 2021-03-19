      
                 @extends('include.footer2')

                    @extends('District.add')
                  @extends('layouts.app')
                 
                 @section('content')
             
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
            @endsection

        
            