<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>EJERCICIO</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="imgs/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
	<link rel="stylesheet" href="css/infP.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="home" class="site-logo">
			<img src="imgs/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="home">INICIO</a></li>
			<li><a class="active" href="classes_u">EJERCICIO</a></li>
			<li><a href="compras_u">COMPRAS</a></li>	
			<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
		</ul>
	</header>
    <body>
		<div style="opacity:0;"class="alert alert-success" id="res"></div>
		
       <form id="formulario">
	    <div class="container">
        <center> <h2>Información personal</h2>
        <br></center>
        <label for="">Edad</label>
        <input pattern="[1-8]{1}[5-9]{1}" title="Debe de ser mayor a 15 años" class="content" name="Edad" type="text">
        <label for="">Peso</label>
        <input pattern="[0-9]{2-3}" title="Ingrese el dato en KG" class="content" name="peso" type="text">
        <label for="">Estatura</label>
        <input pattern ="[0-9]{2-3}" title="Ingrese el dato en CM" lass="content" name="estatura" type="text">
        <div class="content">
        <label >sexo</label><br>
        <label for="man">hombre</label>
        <input name ="sexo" value="hombre" class="content" type="radio" required>
        <label  for="woman">Mujer</label>
        <input name="sexo" value="mujer" class="content" type="radio" required>
        </div>
        <input type="submit">
        <br>
        <br>
        </div>
        </form>
       
        
    </body>
    <br><br><br><br>

									
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/ins.js"></script>
	</body>
</html>
