 
            <form method="post"  action="{{url('/divisionAdd')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>Division</label>
                    <input type="text" class="form-control" name="division" id="division"/>
                </div>
                <div class="form-group">
                    <label>Priority</label>
                    <input type="text" class="form-control" name="priority" id="priority"/>
                </div>
                

                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >ADD</button>
                </div>
            </div>
            </form>
        </div>
    </div>