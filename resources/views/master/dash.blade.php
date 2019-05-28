<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Favicons -->
    <link href="{{ asset('img/isotipo.png') }}" rel="icon">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/highlight.js/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}" id="stylesheetLight">

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.min.css')}}" id="stylesheetDark">
    <link rel="stylesheet" href="{{ asset('css/toastr.css')}}">
    @yield('header')

    <style>body { display: none; }</style>
    

    <title>{{ config('app.name', 'Laravel') }} @yield('titulo')</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->

    @include('includes.members')
    
    @include('includes.search')

    @include('includes.activity')

    <!-- NAVIGATION
    ================================================== -->
    
      @include('includes.nav-side')
      
      @include('includes.nav-top')
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      
      @include('includes.nav-topbar')
      

      <div class="container-fluid">
        <div class="row justify-content-center">
          <!-- Contenido Principal -->
          <div class="col-12">
            
            @yield('content')

          </div>
        </div> <!-- / .row -->
      </div>
      
    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chart.js/Chart.extension.min.js')}}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('assets/libs/list.js/dist/list.min.js')}}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js')}}"></script>
    <script src="{{ asset('js/toastr.js')}}"></script>
    @if (session('status'))
    <script>
        toastr.success( '{{ session("status") }}' );
    </script>
    @endif
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