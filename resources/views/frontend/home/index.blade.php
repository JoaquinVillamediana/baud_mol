@extends('frontend/layouts.app')

@include('frontend/layouts.header')

@section('content')
<!-- main -->
<section id="main">
  <div id="carousel" class="carousel slide" data-ride="carousel" data-pause="false">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home/slider1.jpeg" class="d-block w-100" alt=" img 1">
      </div>
      <div class="carousel-item">
        <img src="images/home/slider2.jpeg" class="d-block w-100" alt=" img 2">
      </div>
      <div class="carousel-item">
        <img src="images/home/slider3.jpeg" class="d-block w-100" alt=" img 3 ">
      </div>
      <div class="overlay">
        <div class="container">
          <div class="row">
            <div class="overlay">
              <div class="titulo">
                <h1>Bienvenido a Baud-Mol</h1>
                <p>Siempre con seriedad, BAUD-MOL S.A elabora la totalidad de sus productos en su moderna planta
                  industrial de 2.400m2,
                  </br>utilizando únicamente materia prima de primerísimo nivel y mano de obra altamente capacitada.
                </p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- endmain -->
<section class="section-text-farbric">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-12">
        <img src="/images/dibujo-fabrica.jpeg" class="draw" alt="">
      </div>
      <div class="col-md-7 col-12">
        <h2 class="section-title ">¿Quienes somos?</h2>
        <p>Una <b>fábrica</b> que se impuso en el mercado gracias a la incorporación de tecnología de última generación
          para proporcionar importantes insumos para el sector automotriz, la industria y la producción rural. </p>
        <p><b>X9</b> y <b>ELECTROMOL</b>, son las marcas con las que la firma <b>BAUD-MOL</b>, una empresa de origen
          familiar nacida el 31 de julio de 1956, lanza al mercado una amplia y destacada línea de cables y terminales
          eléctricos. </p>
        <p>La línea de productos incluye terminales de baterías para automotores donde, con el sello X9, Baud-Mol
          alcanzó sus resultados más satisfactorios, siendo una de las pocas empresas nacionales dedicadas a ese rubro,
          y sin duda, la única capaz de ofrecer productos de calidad incuestionables. </p>
      </div>

    </div>
  </div>
</section>


<section class="section-text-wires">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 class="section-title">Amplia variedad de cables</h2>
        <p>Con el sello ELECTROMOL, sale al mercado una amplia variedad de cables: </p>
        <ul>
          <li><i class="fas fa-cog fa-spin mr-2"></i>UNIPOLARES</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>ENVAINADOS REDONDOS</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>BIPOLARES PARALELOS CHATOS</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>SUBTERRANEO</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>PARLANTE</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>PREENSAMBLADO DE COBRE</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>ANTIHURTO</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>DESNUDO DE COBRE</li>
          <li><i class="fas fa-cog fa-spin mr-2"></i>CABLES DE ARRANQUE, LINEA AUTOMOTOR</li>
        </ul>
      </div>
      <div class="col-md-4 col-12 text-center">
        <div id="carousel-wires" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="/images/6e974e56-bc2a-4070-985f-7e9684807dd0.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/images/foto_bobina_1.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/images/foto_bobina_cable_negro.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/images/FOTO_CABLE_BOBINA_GRANDE.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="/images/IMAGEN_FABRICA.jpeg" alt="Third slide">
            </div>
          </div>
        </div>
        <small class="consult">Consultá</small>
        <a href="" class="btn btn-baud">NUESTRO CATÁLOGO</a>
      </div>
    </div>
  </div>
</section>


<section class="section-founder">
  <h2 class="section-title">Nuestro <b>Fundador</b></h2>
  <div class="row mt-5 w-100">
    <div class="col-md-5 col-12 founder-col">
      <img class="founder-photo" src="/images/founder.jpg" alt="">
    </div>
    <div class="col-md-7 col-12">
      <h3 class="founder-name"><b>ENRIQUE</b> BAUDOU</h3>
      <p class="founder-text">Con no poco esfuerzo y la constante preocupación por mantener y mejorar la calidad y variedad de sus productos, <b> Enrique Baudou</b> convirtió́ la pequeña fundidora que heredero de su padre en una empresa pujante y con un meritorio reconocimiento por parte de un mercado exigente y competitivo como es el de los terminales eléctricos.</p>
    </div>
  </div>
</section>
@include('frontend/layouts.footer')


@endsection