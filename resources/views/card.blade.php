

<div class="row">
@foreach( $product ?? '' as $row)
   
<div class="col-md-4">
<div class="card">
  <img src="{{asset('public/front-end/Image/1.jpg')}}"  style="width:100%">
  <div class="container">
  	<h1>Tailored Jeans</h1>
  	<h4><b>{{$row->title}}</b></h4>
    <p>{{$row->id}}</p>
    <form method="post"  action="{{url('/productSingle/'.$row->id)}}" >
    	@csrf
  <p><button >View</button></p>
    </form>
  </div>
</div>
</div>
 @endforeach
</div>

