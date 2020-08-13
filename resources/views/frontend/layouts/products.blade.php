@if (!empty($oProduct))
<div class="row">

    @foreach ($oProduct as $product)
        
    <div class="card mb-3 mr-4" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/founder.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

    @endforeach

  </div>
  @else
  <div class="card mt-5 mt-md-1">
    <div class="card-body">
        <p>Lo sentimos, No hay productos disponibles en esta seccion</p>
    </div>
</div>
  @endif

