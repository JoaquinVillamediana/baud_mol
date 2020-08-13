
@extends('frontend/layouts.app')

@include('frontend/layouts.header')

@section('content')

<section class="section-text-farbric">
  <div class="container">
    <div class="row">
     
      <div class="col-md-7 col-12">
        <h2 class="section-title ">Productos</h2>
        <p>Todos nuestros <b>productos</b>  </p>
      </div>

    </div>
  </div>
</section>


<section class="section-text-wires">
  <div class="container">
   
     
    @include('frontend/layouts.products')
    
  </div>
</section>



@include('frontend/layouts.footer')


@endsection