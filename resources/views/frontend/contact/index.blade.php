@extends('frontend/layouts.app')

@include('frontend/layouts.header')

@section('content')
<link rel="stylesheet" href="/css/frontend/catalog.css">
<section class="section-name">
  <div class="container text-center">
    <h2>Contacto</h2>
    <p>Disponibles ante cualquier consulta.</p>
  </div>
</section>

<section class="section-catalog">
  <div class="container">

  <div class="row">

<!--Grid column-->
<div class="col-md-9 mb-md-0 mb-5">
    <form  action="{{ route('send_mail') }}" >

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                <label for="name" class="">Nombre y apellido</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Ej: Jorge Nitales">
                  
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                <label for="email" class="">Email</label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Ej: usuario@gmail.com">
                  
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0 mt-4">
                <label for="subject" class="">Asunto</label>
                    <input type="text" id="subject" name="subject" class="form-control" placeholder="Ej: Consulta">
                   
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form mt-4">
                <label for="message">Mensaje</label>
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Ej: Me gustaría consultar sobre..."></textarea>
                    
                </div>

            </div>
        </div>
        <!--Grid row-->

        <div class="text-center text-md-left">
    <button class="btn btn-primary" type="submit">Button</button>
    </div>
    </form>

    
    <div class="status"></div>
</div>
<!--Grid column-->

<!--Grid column-->
<div class="col-md-3 text-center">
    <ul class="list-unstyled mb-0">
        <li><i class="fas fa-map-marker-alt fa-2x"></i>
            <p>Crespo 2049, C1406 CNA, Buenos Aires</p>
        </li>

        <li><i class="fas fa-phone mt-4 fa-2x"></i>
            <p> 011 4921-4227</p>
        </li>

        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
            <p>administracion@baud-mol.com.ar</p>
        </li>
    </ul>
</div>
<!--Grid column-->

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