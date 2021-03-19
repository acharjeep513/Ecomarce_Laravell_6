<br/>
<br/>
<div class="row">

  @foreach( $product ?? '' as $dow)

<div class="col-md-4">
<div class="card-deck">
  <div class="card">
    <img src="{{asset('public/front-end/Image/5.jpg')}}"  class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$dow->title}}</h5>
      <p class="card-text">T{{$dow->description}}</p>
      <p class="card-text"><small class="text-muted"> 
      <p class="card-text">{{$dow->updated_at}}</p></small></p>
    </div>
  </div>
  </div>
</div>


@endforeach
</div>