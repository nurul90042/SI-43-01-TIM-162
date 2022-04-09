<!doctype html>
<html lang="en">
  <head>
<<<<<<< HEAD
  	<title>Dashboard</title>
=======
  	<title>Dashboard | Hallo Pasien</title>
>>>>>>> 896433d11efa9d9f9abc686908bab8a9e2b05818
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/style/user/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/style/css/profile.css') }}">
  </head>
  <body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar" class="active">
            <h1>
                <a href="index.html" class="logo1"><img src="{{ asset('assets/style/images/favicon-log-v2.png') }}" alt=""></a>
            </h1>
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="{{ route('landinguser') }}"><span class="fa fa-home"></span> Home</a>
                </li>
                <li>
                    <a href="{{ route('user-consult') }}"><span class="fa fa-paper-plane"></span> Tanya Dokter</a>
                </li>
                <li>
                    <a href="{{ route('user-profile') }}"><span class="fa fa-user"></span> Profile</a>
                </li>
                {{-- <li>
                    <a href="#"><span class="fa fa-sticky-note"></span> Blog</a>
                </li> --}}
                <li>
                    <a href="#"><span class="fa fa-cogs"></span> Services</a>
                </li>

            </ul>

            <div class="footer">
                <p>
                    &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="icon-heart" aria-hidden="true"></i> by Group 162<a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                </p>
            </div>
        </nav>
    <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                <i class="fa fa-bars"></i>
                <span class="sr-only">Toggle Menu</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>

            <h2 class="mb-4">Halo, user! Semangatt 162!</h2>
            @yield('main')
        </div>
    </div>

    <script src=" {{ asset('assets/style/user/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/popper.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/style/user/js/main.js') }}"></script>


  </body>
</html>
