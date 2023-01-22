<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GMAO - @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/plugins/fontawesome-free/css/all.min.css') }}">
    <script src="https://kit.fontawesome.com/3a988c450f.js" crossorigin="anonymous"></script>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ url('/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('/dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ url('/dist/css/mystyle.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="sidebar-mini layout-fixed dark-mode layout-navbar-fixed sidebar-collapse">
    <div class="wrapper">

        <!-- Preloader -->
        {{--   <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <span class="nav-link" onclick="DarkMode()"><i class="fa-solid fa-circle-half-stroke"></i></span>
                </li>
                <li class="nav-item">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    </li>


                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                            role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.navbar -->
        @else
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-no-expand">
                <!-- Brand Logo -->
                {{--     <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">X    </span>
        </a> --}}

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src={{"/uploads/profil_imgs/".Auth::user()->image}}
                                class="img-circle elevation-2" style="width:45px !important;height:45px !important;" alt="User Image">
                        </div>
                        <div class="info nav-item">
                           <a href="{{'/profile/'.Auth::user()->id}}" class="nav-link"><h6> {{ Auth::user()->name }}</h6></a>
                        </div>
                    </div>


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            {{-- item --}}
                            <li class="nav-item">
                                <a href="/services" class="nav-link">
                                    <i class="fa-sharp fa-solid fa-house"></i>
                                    <p>
                                        Home
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('equipements.index') }}" class="nav-link">
                                    <i class="fa-solid fa-screwdriver-wrench"></i>
                                    <p>
                                        Equipements
                                    </p>
                                </a>
                            </li>
                            {{-- item --}}
                            <li class="nav-item">
                                <a href="{{ route('taches.index') }}" class="nav-link">
                                    <i class="fa-solid fa-list-check"></i>
                                    <p>
                                        Taches
                                        {{-- <span class="right badge badge-danger">New</span> --}}
                                    </p>
                                </a>
                            </li>
                            {{-- item --}}
                            <li class="nav-item">
                                <a href="{{route('etablissements.index')}}" class="nav-link">
                                    <i class="fa-solid fa-building"></i>
                                    <p>
                                        Etablissements
                                    </p>
                                </a>
                            </li>
                            
                   
                            {{-- item --}}
                            <li class="nav-item">
                                <a href="pages/widgets.html" class="nav-link">
                                    <i class="fa-solid fa-calendar"></i>
                                    <p>
                                        Planning
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>
                            </li>
                            {{-- item --}}
                            <li class="nav-item">
                                <a href="{{ route('techniciens.index') }}" class="nav-link">
                                    <i class="fa-solid fa-toolbox"></i> 
                                    <p>
                                       Techniciens
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                            </li>

                            {{-- item --}}
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                    <p>Logout</p>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
    </div>

        @yield('content')



















    <!-- jQuery -->
    <script src="{{ url('/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{url('/dist/js/demo.js')}}"></script> --}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('/dist/js/pages/dashboard.js') }}"></script>


    <script>
        function DarkMode() {
            var body = document.body;
            body.classList.toggle("dark-mode");
        }
    </script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
