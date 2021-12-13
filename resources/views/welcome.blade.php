<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Tiendita</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/log.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('img/log.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('img/log.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/log.png')}}">
    <link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
    <meta name="msapplication-TileImage" content="{{asset('img/log.png')}}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <!--<link href="assets/css/theme.css" rel="stylesheet" /> -->
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />
    
  </head>


  <body>
  
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="#home">
            <img src="{{asset('img/img.png')}}" width="118" alt="logo" /></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="#about">Nosotros</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#socios">Socios</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#vacantes">Vacantes</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#productos">Productos</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#contactanos">Contáctanos</a></li>
            </ul><a class="btn btn-sm btn-outline-primary rounded-pill order-1 order-lg-0 ms-lg-4" href="{{ url('/login') }}">Sign In</a>
          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url({{asset('img/gallery/hero-bg.png')}});background-position:top center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row min-vh-xl-100 min-vh-xxl-25">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{asset('img/fam2.png')}}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
              <h1 class="fw-light font-base fs-6 fs-xxl-7">Estamos para <strong>servirte </strong>en<br/>&nbsp;<strong>todo momento.</strong></h1>
              <p class="fs-1 mb-5">Podrás encontrar los productos que necesitas las <br />24 hrs del día, ya sea en línea o en nuestras tiendas <br> fisicas</p>
              <a class="btn btn-lg btn-primary rounded-pill" href="#!" role="button">Contáctanos</a>
            </div>
          </div>
        </div>
      </section>


<!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="pb-0" id="about">

          <div class="container">
            <div class="row">
              <div class="col-12 py-3">
                
                <!--/.bg-holder-->
  
                <h1 class="text-center">NOSOTROS</h1>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  
  
        <section class="py-5">
          <div class="bg-holder bg-size" style="background-image:url({{asset('img/gallery/about-bg.png')}});background-position:top center;background-size:contain;">
          </div>
          <!--/.bg-holder-->
  
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-6 order-lg-1 mb-5 mb-lg-0"><img class="fit-cover rounded-circle w-100" src="{{asset('img/fam6.jpg')}}" alt="..." /></div>
              <div class="col-md-6 text-center text-md-start">
                <h2 class="fw-bold mb-4">Misión <br class="d-none d-sm-block" /></h2>
                <p>Ofrecer a los consumidores un amplio catálogo de productos de hogar,<br class="d-none d-sm-block" /> 
                  priorizando su disponibilidad mediante la oferta de productos en nuestras<br class="d-none d-sm-block" /> 
                  tiendas físicas, y en nuestra tienda online, ajustando los precios de <br class="d-none d-sm-block" /> 
                  forma competitiva, y ofreciendo siempre la más alta calidad en el servicio.<br class="d-none d-sm-block" /> 
                   </p>                
               
              </div>
            </div>
          </div>
        </section>      





      <section class="bg-secondary">
        <div class="bg-holder" style="background-image:url({{asset('img/gallery/bg-eye-care.png')}});background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xxl-6"><img class="img-fluid" src="{{asset('img/fam3.png')}}" alt="..." /></div>
            <div class="col-md-7 col-xxl-6 text-center text-md-start">
              <h2 class="fw-bold text-light mb-4 mt-4 mt-lg-0">Visión<br class="d-none d-sm-block" /></h2>
              <p class="text-light">
                Convertirnos en la mejor opción para adquirir productos de la más alta <br class="d-none d-sm-block" />
                calidad en todo lugar y en todo momento , manteniendo precios<br class="d-none d-sm-block" />
                 competitivos para cuidar la economía de nuestros clientes.<br class="d-none d-sm-block" />
                
              </p>
              
            </div>
          </div>
        </div>
      </section>

      
      <!-- ============================================-->
      <!-- <section> begin ============================-->
        <section class="py-5" id="departments">

          <div class="container">
            <div class="row">
              <div class="col-12 py-3">
                
                <!--/.bg-holder-->
  
                <h1 class="text-center">Valores de la organización</h1>
              </div>
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->
  
        <!-- ============================================-->
        <!-- <section> begin VALORES ============================-->
        <section class="py-0">
  
          <div class="container">
            <div class="row py-5 align-items-center justify-content-center justify-content-lg-evenly">
              <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon-box text-center"><a class="text-decoration-none" href="#!">
                    <img class="mb-3 deparment-icon" src="{{asset('img/icono1.png')}}" alt="..." />
                    <img class="mb-3 deparment-icon-hover" src="{{asset('img/icono1.png')}}" alt="..." />
                      <p class="fs-1 fs-xxl-2 text-center">Respeto</p>
                    </a></div>
                </div>
              </div>
              <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon-box text-center"><a class="text-decoration-none" href="#!">
                    <img class="mb-3 deparment-icon" src="{{asset('img/icono3.png')}}" alt="..." />
                    <img class="mb-3 deparment-icon-hover" src="{{asset('img/icono3.png')}}" alt="..." />
                      <p class="fs-1 fs-xxl-2 text-center">Compromiso</p>
                    </a></div>
                </div>
              </div>
              <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon-box text-center"><a class="text-decoration-none" href="#!">
                    <img class="mb-3 deparment-icon" src="{{asset('img/icono4.png')}}" alt="..." />
                    <img class="mb-3 deparment-icon-hover" src="{{asset('img/icono4.png')}}" alt="..." />
                      <p class="fs-1 fs-xxl-2 text-center">Excelencia</p>
                    </a></div>
                </div>
              </div>
              <div class="col-auto col-md-4 col-lg-auto text-xl-start">
                <div class="d-flex flex-column align-items-center">
                  <div class="icon-box text-center"><a class="text-decoration-none" href="#!">
                    <img class="mb-3 deparment-icon" src="{{asset('img/icono6.png')}}" alt="..." />
                    <img class="mb-3 deparment-icon-hover" src="{{asset('img/icono6.png')}}" alt="..." />
                      <p class="fs-1 fs-xxl-2 text-center">Honestidad</p>
                    </a></div>
                </div>
              </div>
              
            </div>
          </div>
          <!-- end of .container-->
  
        </section>
        <!-- <section> close VALORES ============================-->
        <!-- ============================================-->
  



      


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="socios"></section>>

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              
              <!--/.bg-holder-->

              <h1 class="text-center">SOCIOS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5">
        
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xl-10 px-0">
              <div class="carousel-item active" data-bs-interval="10000">
                <div class="row h-100 m-lg-7 mx-3 mt-6 mx-md-4 my-md-7">
                  
                  <div class="col-md-4 mb-8 mb-md-0">
                    <div class="card card-span h-100 shadow">
                      <div class="card-body d-flex flex-column flex-center py-5">
                        <img src="{{asset('img/s1.png')}}" width="128" alt="..." />
                        <h5 class="mt-3">César Lázaro</h5>
                        <p class="mb-0 fs-xxl-1">Ing. Software, C. Datos</p>
                        <p class="text-600 mb-0">Morelia, Michoacan</p>
                        <p class="text-600 mb-4">10 años de experiencia</p>
                        
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 mb-8 mb-md-0">
                    <div class="card card-span h-100 shadow">
                      <div class="card-body d-flex flex-column flex-center py-5">
                          <img src="{{asset('img/s2.png')}}" width="128" alt="..." />
                        <h5 class="mt-3">José L. Valentín</h5>
                        <p class="mb-0 fs-xxl-1">Ing. Software, Des. Web</p>
                        <p class="text-600 mb-0">Morelia, Michoacan</p>
                        <p class="text-600 mb-4">12 años de experiencia</p>
                        
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 mb-8 mb-md-0">
                    <div class="card card-span h-100 shadow">
                      <div class="card-body d-flex flex-column flex-center py-5">
                          <img src="{{asset('img/s3.png')}}" width="128" alt="..." />
                        <h5 class="mt-3">Juan F. García</h5>
                        <p class="mb-0 fs-xxl-1">Ing. Software, Des. Web</p>
                        <p class="text-600 mb-0">Morelia, Michoacan</p>
                        <p class="text-600 mb-4">10 años de experiencia</p>
                        
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="vacantes">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url({{asset('img/gallery/blog-post.png')}});background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">VACANTES</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder bg-size" style="background-image:url({{asset('img/gallery/dot-bg.png')}});background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
          @foreach ($vacantes as $vacante)
            @if ($vacante->status==true)
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3">
                
                <div class="card-body"><span class="fs--1 text-primary me-3">Vacante: {{$vacante->titulo}}</span><br>
                  
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  </svg><span class="fs--1 text-900">Puesto: {{$vacante->puesto}}</span><span class="fs--1"></span><br>
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{$vacante->descripcion}}</h5>
                  <a>Estudios: {{$vacante->carreras}}</a><br>
                  <a>Salario: $ {{$vacante->salario}}</a>
                </div>
              </div>
            </div>
            @endif  
          @endforeach
            
            
          </div>
        </div>
      </section>



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="productos">

        <div class="container">
          <div class="row">
            <div class="col-12 py-3">
              <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/blog-post.png);background-position:top center;background-size:contain;">
              </div>
              <!--/.bg-holder-->

              <h1 class="text-center">PRODUCTOS</h1>
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section>
        <div class="bg-holder bg-size" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
          @foreach ($productos as $producto)
            <div class="col-sm-6 col-lg-3 mb-4">
              <div class="card h-100 shadow card-span rounded-3">
                <img class="card-img-top rounded-top-3" src="{{ asset( 'img/productos/'.$producto->foto)}}" alt="news" />
                <div class="card-body"><span class="fs--1 text-primary me-3">ID: {{$producto->codigoBarras}}</span>
                  
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"></path>
                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z"> </path>
                  
                  <h5 class="font-base fs-lg-0 fs-xl-1 my-3">{{$producto->nombre}}</h5>
                  <a>Precio: $ {{$producto->precio}}</a>
                </div>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </section>


      
      <section class="py-0 bg-secondary" id="contactanos"> 
        <div class="bg-holder opacity-25" style="background-image:url(assets/img/gallery/dot-bg.png);background-position:top left;margin-top:-3.125rem;background-size:auto;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row py-8">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15023.030683828332!2d-101.1858201!3d19.7229386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf001c256ae856856!2sInstituto%20Tecnol%C3%B3gico%20de%20Morelia!5e0!3m2!1ses!2smx!4v1638835863333!5m2!1ses!2smx" 
              width="400" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
              
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">Teléfonos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">443-366-9184</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">443-391-9320</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">443-250-1025</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">Correos</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="footer-link" href="#!">l18120196@morelia.tecnm.mx</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">l18120163@morelia.tecnm.mx</a></li>
                <li class="lh-lg"><a class="footer-link" href="#!">l18120172@morelia.tecnm.mx</a></li>
              </ul>
            </div>
            
          </div>
        </div>


        <!-- ============================================-->
        <!-- <section> begin ============================-->
        <section class="py-0 bg-primary">

          <div class="container">
            <div class="row justify-content-md-between justify-content-evenly py-4">
              <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
                <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Tienditas, 2021</p>
              </div>
              
            </div>
          </div>
          <!-- end of .container-->

        </section>
        <!-- <section> close ============================-->
        <!-- ============================================-->


      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://scripts.sirv.com/sirvjs/v3/sirv.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&amp;display=swap" rel="stylesheet">
  </body>

</html>