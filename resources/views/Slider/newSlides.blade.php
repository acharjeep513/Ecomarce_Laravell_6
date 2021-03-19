  <form method="post"  action="{{url('/slidesAddToDatabase')}}" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                
                <div class="form-group">
                    <label>title</label>
                    <input type="text" class="form-control" name="title" id="title"/>
                </div>
                <div class="form-group">
                    <label>image</label>
                    <input type="text" class="form-control" name="image" id="image"/>
                </div>
                <div class="form-group">
                    <label>button_text</label>
                    <input type="text" class="form-control" name="button_text" id="button_text"/>
                </div>
               
                <div class="form-group">
                    <label>button_link</label>
                     <input type="text" class="form-control" name="button_link" id="button_link"/>
                </div>
                 
                <div class="form-group" >
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i >slide add</button>
                </div>
            </div>
            </form>