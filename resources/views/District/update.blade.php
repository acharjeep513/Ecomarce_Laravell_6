  <form method="post"  action="{{url('/districtEdited/'.$district->id)}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>district</label>
                    <input type="text" class="form-control" name="district" id="district" value="{{ $district->district}}"/>
                </div>
                <div class="form-group">
                    <label>Division</label>
                    <input type="text" class="form-control" name="prority" id="prority" value="{{ $district->division}}"/>
                </div>
                
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >Register</button>
                </div>
            </div>
            </form>