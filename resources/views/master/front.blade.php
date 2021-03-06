<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="CloudBank" name="keywords">
  <meta content="CloudBank" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/isotipo.png') }}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  @yield('header')

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
         <!-- <h1 class="text-light"><a href="#intro" class="scrollto"><span>{{ config('app.name', 'Laravel') }}</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="{{ asset('img/logo.png')}}" alt="" class="img-fluid"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Nosotros</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#team">Equipo</a></li>
          <li><a href="#contact">Contacto</a></li>

          @guest
          <li><a href="{{ route('login') }}">Iniciar Sesión</a></li>
          @else
          <li class="drop-down"><a href="">Bienvenido <strong>{{ title_case(Auth::user()->primer_nombre) }}</strong>
                @if(Auth::user()->mensajesNoLeidos()->count() > 0)
                <span class="badge badge-pill badge-warning p-1">{{ Auth::user()->mensajesNoLeidos()->count() }}</span>
                @endif
              </a>
            <ul>
              @role('admin|dev')
              <li><a href="{{ route('admin.dashboard') }}">Admin</a></li>
              @endrole

              @role('admin|dev')
              <li><a href="{{ route('admin.ver.pagos') }}">Pagos</a></li>
              @endrole

              @role('admin|agente|dev')
              <li><a href="{{ route('admin.usuarios') }}">Usuarios</a></li>
              @endrole

              @role('admin|agente|dev')
              <li><a href="{{ route('admin.creditos') }}">Creditos</a></li>
              @endrole
              
              @role('almacen|dev')
              <li><a href="{{ route('usuario.creditos') }}">Créditos</a></li>
              <li><a href="{{ route('usuario.mensajes') }}">Mensajes 
                @if(Auth::user()->mensajesNoLeidos()->count() > 0)
                <span class="badge badge-pill badge-warning p-1">{{ Auth::user()->mensajesNoLeidos()->count() }}</span>
                @endif
              </a>
              </li>
              @endrole
              <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                  >Salir</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                  </form>
              <!--<li><a href="#">Datos</a></li>
              <li><a href="#">Historial</a></li>
              <li><a href="#">Mensajes</a></li>
              <li><a href="#">Cerrar Sesión</a></li>-->
            </ul>
          </li>
          @endguest
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

 		@yield('content')

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>Créditos Online</h3>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Secciones</h4>
            <ul>
              <li><a href="#intro" class="scrollto">Inicio</a></li>
              <li><a href="#about" class="scrollto">Nosotros</a></li>
              <li><a href="#services" class="scrollto">Servicios</a></li>
              <li><a href="#team" class="scrollto">Equipo</a></li>
              <li><a href="#contact" class="scrollto">Contacto</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contacto</h4>
            <p>
              A108 Adam Street <br>
              535022<br>
              344555 <br>
              <strong>Phone:</strong> +34 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Suscribete</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>{{ config('app.name', 'Laravel') }}</strong>. Todos los derechos reservados
      </div>
      <div class="credits d-none">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="{{ asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset('contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js')}}"></script>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5cec5bfda667a0210d59b484/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  @yield('scripts')

</body>
</html>
