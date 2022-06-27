<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>GIMNASIO VIRTUAL</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<meta charset="UTF-8">
	<meta name="description" content="GYM VIRUTAL HUEJUTLA">
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
	<script src="//code.tidio.co/emmvslw40kuqkoq1qf444jrdnoe27jvp.js" async></script>

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
	<div><header class="header-section">
		<a href="home" class="site-logo">
			<img src="imgs/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a class="active" href="home">INICIO</a></li>
			<li><a href="classes_u">EJERCICIO</a></li>
			<li><a href="compras_u">COMPRAS</a></li>	
			<li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a  class="dropdown_item" href="personalInfo_u" >
                                    Información personal
                                </a>
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
</div>	
	

<div class="container-fluid">
		<ol class="breadcrumb">
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link breadcrumbs__link--active">INICIO</li>
        </li>
		</ol>
	</div>
		

	<div class="clearfix"></div>
	
	<!-- Header section end -->

	<!-- Hero section -->
	<div class="contenedor">

		<div class="atras botones">
			&#60
		</div>

		<div class="adelante botones">
			&#62
		</div>

		<img src="imgs/1car.jpg" alt="" id="imagen">
	</div>
	
	</section>
	<!-- Hero section end -->

	<!-- Feature section -->
	<section class="feature-section">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-lg-8">
					
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-004-dumbbell"></i>
						</div>
						<h4>GYM VIRTUAL</h4>
						<p>Una página web de un gimnasio virtual en donde las personas tengan la oportunidad de realizar rutinas deportivas, donde se espera obtener un gran resultado físico</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<img src="imgs/mision.png">
						</div>
						<h4>MISIÓN </h4>
						<p>Contribuir con el desarrollo integral de los clientes mediante el diseño y la aplicación de un conjunto de servicios que fortalezcan la salud física y mental del cliente. </p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="icon-box-item">
						<div class="ib-icon">
							<i class="flaticon-010-podium"></i>
						</div>
						<h4>VISIÓN </h4>
						<p>Brindar servicios de calidad a usuarios de acuerdo a las necesidades de cada uno, con el objetivo de promover estilos de vida saludables haciendo uso de las nuevas tecnologías con alcance a todos. </p>
					</div>
				</div>
				<br>
				<center><table>
					<tbody>
					<tr>
					<td>
					<a href="imc_u" class="btn fourth">CALCULA TU IMC</a>
					<br>
					<br>
					</td>
					<td>
					   <a href="galeria_u" class="btn fourth">NUESTRA GALERIA</a>
					<br>
					<br>
					</td>
					</tr>
					</tbody>
					</table></center>
			</div>
		</div>
	</section>
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
	<script src="js/carrusel_u.js"></script>

	</body>
</html>
