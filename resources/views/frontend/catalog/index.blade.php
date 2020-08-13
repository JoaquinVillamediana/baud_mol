@extends('frontend/layouts.app')

@include('frontend/layouts.header')

@section('content')
<link rel="stylesheet" href="/css/frontend/catalog.css">
<section class="section-name">
  <div class="container text-center">
    <h2>Catálogo</h2>
  </div>
</section>

<section class="section-catalog">
  <div class="container">

    <div class="row row-category">
      <h3 href="" data-category_id="1"  class="category-name">X9<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
      <div id="category-1" style="display: none" class="col-12">
        <h5 class="product">TERMINALES DE INSTALACION <a href="#" class="more">Ver más</a></h5>
        <h5 data-subcategory_id="1"  class="subcategory-name">CLIP DE BATERIA <span class="subcategory-arrow"><i class="fas fa-chevron-circle-down"></i></span></h5>
        <div id="subcategory-1" style="display: none" class="subcategory">
          <h5 class="product">TERMINALES DE INSTALACION<a href="#" class="more">Ver más</a></h5>
          <h5 class="product">TERMINALES DE INSTALACION<a href="#" class="more">Ver más</a></h5>
        </div>
        <h5 class="product">TERMINALES DE INSTALACION<a href="#" class="more">Ver más</a></h5>
        <h5 class="product">TERMINALES DE INSTALACION<a href="#" class="more">Ver más</a></h5>
      </div>
    </div>
    <div class="row row-category">
      <h3 href="" data-category_id="2"  class="category-name">X9<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
      <div id="category-2" style="display: none" class="col-12 ">
        <h5 class="product">TERMINALES DE INSTALACION <span class="more"></span></h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
      </div>
    </div>
    <div class="row row-category">
      <h3 href="" data-category_id="3"  class="category-name">X9<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
      <div id="category-3" style="display: none" class="col-12 ">
        <h5 class="product">TERMINALES DE INSTALACION <span class="icon"></span></h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
      </div>
    </div>
    <div class="row row-category">
      <h3 href="" data-category_id="4" class="category-name">X9<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
      <div id="category-4" style="display: none" class="col-12 ">
        <h5 class="product">TERMINALES DE INSTALACION <span class="icon"></span></h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
        <h5 class="product">TERMINALES DE INSTALACION</h5>
      </div>
    </div>


  </div>
</section>

@include('frontend/layouts.footer')


<script>

$(document).on('click', '.category-name', function () {
    event.preventDefault();
    let category_id = $(this).data('category_id');
    if($('#category-'+category_id).is(":visible"))
    {
      $('#category-'+category_id).slideToggle();
    }
    else{
      $('#category-'+category_id).slideDown();
    }

});


$(document).on('click', '.subcategory-name', function () {
    event.preventDefault();
    let subcategory_id = $(this).data('subcategory_id');
    if($('#subcategory-'+subcategory_id).is(":visible"))
    {
      $('#subcategory-'+subcategory_id).slideToggle();
    }
    else{
      $('#subcategory-'+subcategory_id).slideDown();
    }

});
</script>

@endsection