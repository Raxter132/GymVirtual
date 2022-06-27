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

	<div class="container-fluid">
		<br>
		<ol class="breadcrumb">
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link">INICIO</li>
        </li> 
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link breadcrumbs__link--active">EJERCICIO</li>
        </li>
		</ol>
	</div>
	<div class="clearfix"></div>
	<!-- Header section end -->

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="imgs/2.jpg">
		<div class="container">
			<h2>EJERCICIOS</h2>
		</div>
	</section>
	<!-- Page top section end -->


	<!-- Service section -->
	<section class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						<a href="brazo_u"><div class="ib-icon">
						<img src="imgs/brazo.png">
						</div><h4>BRAZO</h4></a>
						<p>Puede evitar lesiones, al sufrir una caída o un accidente de brazo, cuanto mas fuertes tengas esta parte del cuerpo mejor será para amortiguar el accidente. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						<a href="pecho_u"><div class="ib-icon">
							<img src="imgs/pecho.png">
						</div><h4>PECHO</h4></a>
						<p>Mantiene las fibras musculares activas y tonificadas, al igual que sucede con el hombre, la mujer aumentara dichas fibras y endurecimiento de la misma. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						
						
						<a href="hombro_u"><div class="ib-icon">
							<img src="imgs/hombro.png">
						</div><h4>HOMBRO</h4></a>
						<p>Hace que tus brazos sean capaces de agarrar y soportar más pesos y además que hará que luzcas mejor.  </p>
					</div>
				</div>
				
				
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						<a href="abdomen_u"><div class="ib-icon">
							<img src="imgs/abdomen.png">
						</div><h4>ABDOMEN</h4></a>
						<p>Benefician en los músculos de espalda al mover el tronco, te ayuda a tener una posición vertical adecuada y correcta, además de que reduce la ansiedad y evita los molestos dolores de espalda. </p>
					</div>
				</div>
				
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						<a href="pierna_u"><div class="ib-icon">
							<img src="imgs/pierna.png">
						</div><h4>PIERNA</h4></a>
						<p>Provoca un gran consumo caloricio al tratarse de un grupo muscular grande. Activa grupos musculares del tren superior y mejora el entrenamiento del mismo. </p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="icon-box-item">
						
						<a href="espalda_u"><div class="ib-icon">
							<img src="imgs/espalda.png">
						</div><h4>ESPALDA</h4></a>
						<p>Influyen en nuestra postura corporal y dependiendo de cada músculo en particular, ayudan a estabilizar la pelvis, permitir movimientos de hombros y brazos e incluso, de la cabeza. </p>
					</div>
				</div>
	</section>
	<!-- Service section end -->

	<!-- Footer section -->
	<footer class="footer-section set-bg" data-setbg="imgs/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="social-links">
							<a href="#"><i class="fa fa-instagram"></i></a>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="fw-info-box">
							<div class="social-links">
							<p>gymvirtualhuejutlauthh@gmail.com</p>	
								
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="fw-info-box">
							<div class="social-links">
								<p>7898964093/7711816819</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget">
						<div class="fw-info-box">
							<div class="social-links">
								<a href="aviso_u.html">AVISO DE PRIVACIDAD</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			</div>
		</div>
	</footer>
	<!-- Footer section end -->
									
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
