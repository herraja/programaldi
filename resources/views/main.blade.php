<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset ('ikan/assets/img/apple-icon.png') }}">
    <link rel="icon" type="img/png" href="{{ asset('ikan/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Components Documentation - Now UI Dashboard by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="{{ asset('ikan/https://fonts.googleapis.com/css?family=Montserrat:400,700,200')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('ikan/https://use.fontawesome.com/releases/v5.7.1/css/all.css' )}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('ikan/assets/css/bootstrapD.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('ikan/assets/css/now-ui-dashboardD.css?v=1.3.0')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('ikan/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="offline-doc">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
                </div>
                <a class="navbar-brand" href="#pablo">Now UI Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('ikan/screens/dashboard.png')}}">
              Back to Dashboard
            </a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-dashboard/issues" target="_blank">
              Have an issue?
            </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image: url('../assets/img/header.jpg');"></div>
        <div class="container text-center">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="brand">
                    <h1 class="title">
                        Now UI Dashboard
                    </h1>
                    <h3 class="description">Documentation</h3>
                    <br/>
                    <a href="{{ asset('ikan/https://demos.creative-tim.com/now-ui-dashboard-laravel/docs/getting-started/laravel-setup.html')}}" class="btn btn-primary btn-round btn-lg">View documentation</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav>
                <ul>
                    <li>
                        <a href="{{ asset('ikan/https://www.creative-tim.com')}}">
              Creative Tim
            </a>
                    </li>
                    <li>
                        <a href="{{ asset('ikan/http://presentation.creative-tim.com')}}">
              About Us
            </a>
                    </li>
                    <li>
                        <a href="{{ asset('ikan/http://blog.creative-tim.com')}}">
              Blog
            </a>
                    </li>
                </ul>
            </nav>
            <!--
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>, Designed by
                <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div> -->
        </div>
    </footer>

    <!--   Core JS Files   -->
    <script src="{{ asset('ikan/assets/js/core/jquery.min.js')}}"></script>
    <script src="{{ asset('ikan/assets/js/core/popper.min.js')}}"></script>
    <script src="{{ asset('ikan/assets/js/core/bootstrap.min.js')}}"></script>
    <script src="{{ asset('ikan/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="{{ asset('ikan/https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE')}}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('ikan/assets/js/plugins/chartjs.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('ikan/assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('ikan/assets/js/now-ui-dashboard.min.js?v=1.3.0')}}" type="text/javascript"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('ikan/assets/demo/demo.js')}}"></script>
</body>

</html>