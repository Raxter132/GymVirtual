<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>COMPRAS</title>
	<meta charset="UTF-8">
	<meta name="description" content="X Gym Fitness HTML Template">
	<meta name="keywords" content="fitness, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="imgs/sfavicon.ico" rel="shortcut icon"/>

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
	<script src="//code.tidio.co/emmvslw40kuqkoq1qf444jrdnoe27jvp.js" async></script>


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
			<li><a href="home">INICIO</a></li>
			<li><a href="classes_u">EJERCICIO</a></li>
			<li><a class="active" href="compras_u">COMPRAS</a></li>	
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
	</header></div>
	<div class="container-fluid">
		<br>
		<ol class="breadcrumb">
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link">INICIO</li>
        </li>
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link breadcrumbs__link--active">COMPRAS</li>
        </li>
		</ol>
	</div>
    
	<div class="clearfix"></div>
	<!-- Header section end -->
    <center><table>
        <tbody>
        <tr>
        <td>
        <a title="ALIMENTOS" href="{{route('dir.sites','alimento_u')}}"><img style="border-radius:12%;" src="imgs/ALIMENTOS.png" alt="alimentos" width="400" height="400" HSPACE="30" VSPACE="30"/></center>
        <br>
        <br>
        </td>
        <td>
       <a title="HERRAMIENTAS" href="{{route('dir.sites','herramientas_u')}}"><img style="border-radius:12%;" src="imgs/HERRAMIENTAS.png" alt="HERRAMIENTAS" width="400" height="400" HSPACE="30" VSPACE="30"/></center>
        <br>
        <br>
        </td>
        </tr>
        </tbody>
        </table></center>
        
    
    
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
								<a href="aviso.html">AVISO DE PRIVACIDAD</a>
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
