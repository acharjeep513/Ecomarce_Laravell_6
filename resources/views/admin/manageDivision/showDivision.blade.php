  @extends('include.footer2')

  @extends('layouts.app')

  
                 @section('content')
          <div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
          
                <th align="center">Division</th>
                <th align="center">Priority</th>
                <th>Action</th>
            </tr>
       

            @foreach( $division ?? '' as $row)
            <tr align="center" >
                <td>{{$row->division}}</td>
                <td> {{$row->prority}}</td>
             
                
                
                <td><a href="{{ url ('/adminUpdateDivision/'.$row->id) }}" class="btn  btn-info">Edit</a>
                    <a href="{{ url ('/adminDeleteDivision/'.$row->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
        </table>
    

</div>
            @endsection
                 