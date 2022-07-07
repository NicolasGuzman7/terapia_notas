<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="{{ env('APP_URL', '') }}/css/admin.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    

    @yield('css')

</head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/admin">Administrador</a>

            <!-- Navbar Search-->

            <!-- Navbar-->
            <ul class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ env('APP_URL', '') }}/admin/usuarios/create">Crear Usuario</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ env('APP_URL', '') }}/admin/usuarios">Ver Usuarios</a></li>
                        
                </li>
            </ul>
        </nav>



        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="{{ env('APP_URL', '') }}/galeriadmin">
                                <div class="sb-nav-link-icon"><i class="fas fa-images"></i></div>
                                Galeria
                            </a>
                            <a class="nav-link" href="{{ env('APP_URL', '') }}/artista">
                                <div class="sb-nav-link-icon"><i class="fas fa-dice"></i></div>
                                Artista
                            </a>
                            <a class="nav-link" href="{{ env('APP_URL', '') }}/calendarioadmin/form">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar"></i></div>
                                Calendario
                            </a>
                            <a class="nav-link" href="{{ env('APP_URL', '') }}/admin/usuarios">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Usuario
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        @yield('content')


</div>

</body>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
@yield('js')
</body>
</html>