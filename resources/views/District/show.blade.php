<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">District</th>
                <th align="center">Division</th>
                <th>Action</th>
            </tr>
       

            @foreach( $district ?? '' as $row)
            <tr align="center" >
                <td>{{$row->district}}</td>
                <td> {{$row->division}}</td>
             
                
                
                <td><a href="{{ url ('/districtUpdate/'.$row->id) }}" class="btn  btn-info">Edit</a>
                    <a href="{{ url ('/districtDelete/'.$row->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>