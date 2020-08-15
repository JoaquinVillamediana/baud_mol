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
    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="name" name="name" class="form-control">
                    <label for="name" class="">Nombre y apellido</label>
                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-6">
                <div class="md-form mb-0">
                    <input type="text" id="email" name="email" class="form-control">
                    <label for="email" class="">Email</label>
                </div>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">
            <div class="col-md-12">
                <div class="md-form mb-0">
                    <input type="text" id="subject" name="subject" class="form-control">
                    <label for="subject" class="">Asunto</label>
                </div>
            </div>
        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="md-form">
                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                    <label for="message">Mensaje</label>
                </div>

            </div>
        </div>
        <!--Grid row-->

    </form>

    <div class="text-center text-md-left">
        <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Enviar</a>
    </div>
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