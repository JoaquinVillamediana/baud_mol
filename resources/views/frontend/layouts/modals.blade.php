<!-- Modal -->
@if (!empty($aProducts))
@foreach ($aProducts as $product)
<div class="modal fade" id="ProductModal-{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="ProductModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ProductModalLabel">{{$product->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carouselProductControls-{{$product->id}}" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            @foreach ($aImages as $image)
            @if ($image->product_id == $product->id)
            <div class="carousel-item active">
              <img class="d-block w-100" src="" alt="{{$product->name}}">
            </div>
            @endif
            @endforeach
          </div>
          <a class="carousel-control-prev" href="#carouselProductControls-{{$product->id}}" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselProductControls-{{$product->id}}" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
@endforeach
@endif