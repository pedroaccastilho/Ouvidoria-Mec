<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('title')</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{url('css')}}/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{url('css')}}/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{url('css')}}/styleUser.css" rel="stylesheet">
</head>
    <body>

        <header>
          <!--Navbar-->
          <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"><strong>Ouvidoria Mec</strong></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Reclamações</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Histórico</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Notificações</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                  </li>
                </ul>
                <ul class="navbar-nav ml-auto nav-flex-icons">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default"
                      aria-labelledby="navbarDropdownMenuLink-333">
                      <a class="dropdown-item" href="#">Perfil</a>
                      <a class="dropdown-item" href="{{route('login.changePassword')}}">Alterar senha</a>
                      <a class="dropdown-item" href="{{route('login.logout')}}">Logout</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- Navbar -->
          <!-- Full Page Intro -->
          <div class="view" style="background-image: url('img/user/home-banner.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-black-light align-items-center">
              <!-- Content -->
              <div class="container">
                @yield('content')
              </div>
              <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
          </div>
          <!-- Full Page Intro -->
        </header>
        <!-- Main navigation -->
        <!-- Footer -->
        <footer class="page-footer fixed-bottom font-small black">

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> Ouvidoria Mec</a>
          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{url('js')}}/jquery-3.4.0.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{url('js')}}/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{url('js')}}/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{url('js')}}/mdb.min.js"></script>
    </body>

</html>
