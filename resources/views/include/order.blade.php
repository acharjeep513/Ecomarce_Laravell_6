
<div class="row">

<br>
    <br>
    <div class="col-md-12">
<div class="container" align="center">
    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
                <th align="center">    # </th>
                <th align="center">Order Id</th>
                <th align="center">Order Name</th>
                <th align="center">phone</th>
                <th>order Status</th>
                <th>Action</th>
            </tr>
       


            @foreach( $order ?? '' as $order)
            <tr align="center" >
            	<td>{{$loop->index + 1}}</td>
                <td>LE{{$order->id}}</td>
                <td>LE{{$order->name}}</td>
                <td>LE{{$order->phone}}</td>
                <td>
                	<p>
                	@if($order->is_seen_by_admin)
                	<button type="button" class="btn btn-success btn-sm">Seen</button>
                	@else
                	<button type="button" class="btn btn-warning btn-sm">Un-seen</button>
                	@endif
                	</p>
                	<p>
                	@if($order->is_paid)
                	<button type="button" class="btn btn-success btn-sm">paid</button>
                	@else
                	<button type="button" class="btn btn-warning btn-sm">Un-paid</button>
                	@endif
                	</p>
                	<p>
                	@if($order->is_completed)
                	<button type="button" class="btn btn-success btn-sm">Complited</button>
                	@else
                	<button type="button" class="btn btn-warning btn-sm">In complited</button>
                	@endif
                	</p>
                </td>
             
                
                
                <td><a href="{{ url ('/orderView/'.$order->id) }}" class="btn  btn-info">View</a>
                    <a href="{{ url ('/orderDelete/'.$order->id) }}" class="btn  btn-info">Delete</a>
   
                </td>
            </tr>

           
            @endforeach
      
      
        </table>
    

</div>
</div>
</div>
