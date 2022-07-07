<!DOCTYPE html>
<html>
<head>
	<title>Terapia en Notas - @yield('title')</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
    
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #FF4A23;" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="admin">ADMINISTRADOR<img src="#" alt="" /></a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu<i class="fas fa-bars ml-1"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="artista/create">Crear Evento</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="calendarioadmin">Calendario</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="galeriadmin">Galeria</a></li>
                    </ul>
                </div>
            </div>
</nav>

</nav>


<div class="container">

		@yield('content')

	</div>

</body>
</html>