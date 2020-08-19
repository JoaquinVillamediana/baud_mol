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
      @foreach ($aCategories as $category)
        @if ($category->countsub < 1) 
          <h3 href="" data-category_id="{{$category->id}}" class="category-name">{{$category->name}}<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
        @else
          <h3 href="" data-category_id="{{$category->id}}" class="category-name">{{$category->name}}<span class="category-arrow"><i class="fas fa-chevron-circle-down"></i></span></h3>
          <div id="category-{{$category->id}}" style="display: none" class="col-12">
            @foreach ($aSubCategories as $subcategory)
              @if ($subcategory->category_id == $category->id)
                <h5 data-subcategory_id="{{$subcategory->id}}" class="subcategory-name">{{$subcategory->name}}<span class="subcategory-arrow"><i class="fas fa-chevron-circle-down"></i></span></h5>
                  @if($category->countsub > 0)
                    <div id="subcategory-{{$subcategory->id}}" style="display: none" class="subcategory">
                      @foreach ($aProducts as $pr)
                        @if ($pr->subcategory_id == $subcategory->id)
                          <h5 class="product">{{$pr->name}}<a href="#" class="more">Ver más</a></h5>
                        @endif
                      @endforeach
                    </div>
                  @endif
                  
                  
              @endif
            @endforeach
            @foreach($aProducts as $pr)
              @if($pr->category_id == $category->id && $pr->subcategory_id == NULL )
                <h5 class="product">{{$pr->name}}<a href="#" class="more">Ver más</a></h5>
              @endif
            @endforeach
          </div>
        @endif
      @endforeach
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