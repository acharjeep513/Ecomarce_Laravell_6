  <form method="post"  action="{{url('/divisionEdited/'.$division->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>Division</label>
                    <input type="text" class="form-control" name="division" id="division" value="{{ $division->division}}"/>
                </div>
                <div class="form-group">
                    <label>Priority</label>
                    <input type="text" class="form-control" name="prority" id="prority" value="{{ $division->prority}}"/>
                </div>
                
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
            </div>
            </form>