<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Kit by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('/css/material-kit.css?v=2.0.3') }}" rel="stylesheet" />
  <link href="{{ asset('/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="@yield('body-class')">
  <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
     <div class="container"> 
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ url('/') }}">
          App Shop </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          {{--  <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Components
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="../index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
              <i class="material-icons">cloud_download</i> Download
            </a>
          </li>  --}}
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">Ingresar</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Registro</a>
          </li>
@else
<li class="dropdown">
    <a  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu">
        <li>
            <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Cerrar sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</li>
@endguest
         {{--   <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank" data-original-title="Follow us on Twitter">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank" data-original-title="Like us on Facebook">
              <i class="fa fa-facebook-square"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank" data-original-title="Follow us on Instagram">
              <i class="fa fa-instagram"></i>
            </a>
          </li>  --}}
        </ul>
      </div>
    </div>
  </nav>
  
 <div class="wrapper"> 
      @yield('content');
  </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('/js/core/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/core/popper.min.js') }}" type="text/javascript"></script>
    <!--   Core JS Files   -->
    <script src="{{ asset('/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/js/plugins/moment.min.js') }}"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="{{ asset('/js/plugins/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('/js/material-kit.js?v=2.0.3') }}" type="text/javascript"></script>
</body>




</html>
