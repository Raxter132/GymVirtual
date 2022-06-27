<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>GIMNASIO VIRTUAL</title>
	<meta charset="UTF-8">
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
	<header class="header-section">
		<a href="index" class="site-logo">
			<img src="imgs/logo.png" alt="">
		</a>
		<ul class="main-menu">
			<li><a href="/">INICIO</a></li>
			<li><a href="classes">EJERCICIO</a></li>
			<li><a href="compras">COMPRAS</a></li>
			<li><a href="login">LOGIN</a></li>	
			</li>
		</ul>
	</header>
	<div class="container-fluid">
		<br>
		<ol class="breadcrumb">
		<li class="breadcrumbs__item">
            <li class="breadcrumbs__link">INICIO ></li>
            <li class="breadcrumbs__link breadcrumbs__link--active">IMC</li>
        </li>
		</ol>
	</div>

	<!-- Feature section -->

    <style>
 .containercmi{
    background-color: #ffffff;
    padding: 30px 30px;
    width: 400px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 49%;
    left: 50%;
    border-radius: 5px;
    font-family: 'PT Sans',sans-serif;
    box-shadow: 25px 25px 30px rgba(0,0,0,0.15);
}
.containercmi h1{
	background: #f13434;
	color: white;
	text-align: center;
	font-size: 23px;
	letter-spacing: 1px;
	margin-top: -30px;
	margin-left: -30px;
	margin-right: -30px;
	margin-bottom: 40px;
}
.row{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 40px;
}
.row span{
    font-weight: 500;
}
input[type="range"]{
    width: 70%;
    height: 3.5px;
    -webkit-appearance: none;
    appearance: none;
    background-color: #dcdcdc;
    border-radius: 3px;
    outline: none;
}
input[type="range"]::-webkit-slider-thumb{
    -webkit-appearance: none;
    appearance: none;
    height: 15px;
    width: 15px;
    background-color: #474343;
    border-radius: 50%;
    cursor: pointer;
}
#result{
    font-size: 30px;
    font-weight: 700;
    letter-spacing: 1px;
    text-align: center;
    color: #10c010;
}
#category{
    font-size: 18px;
    text-align: center;
    letter-spacing: 1px;
}
.display{
box-shadow: 0 0 20px rgba(0,139,253,0.25);
margin-bottom: 60px;
}
    </style>
    <div class="containercmi">
			<h1>CALCULADORA IMC</h1>
			<div class="display">
				        <p id="result">20.0</p>
				        <p id="category">Peso normal 😍</p>
			</div>
        <div class="row">
            <input type="range" min="20" max="200" value="20" id="weight" oninput="calculate()">
            <span id="weight-val">20 kg</span>
        </div>
        <div class="row">
            <input type="range" min="100" max="250" value="100" id="height" oninput="calculate()">
            <span id="height-val">100 cm</span>
        </div>


    </div>

    <!--Script-->
    <script>
    function calculate(){
    var bmi;
    var result = document.getElementById("result");

    var height = parseInt(document.getElementById("height").value);

    var weight = parseInt(document.getElementById("weight").value);

    document.getElementById("weight-val").textContent = weight + " kg";
    document.getElementById("height-val").textContent = height + " cm";

    bmi = (weight / Math.pow( (height/100), 2 )).toFixed(1);

    result.textContent = bmi;

    if(bmi < 18.5){
        category = "Bajo Peso 😒";
        result.style.color = "#ffc44d";
    }
  
    else if( bmi >= 18.5 && bmi <= 24.9 ){
        category = "Peso Normal 😍";
        result.style.color = "#0be881";
    }
  
    else if( bmi >= 25 && bmi <= 29.9 ){
        category = "Sobre Peso 😮";
        result.style.color = "#ff884d";
    }
  
    else{
        category = "Obeso 😱";
        result.style.color = "#ff5e57";
    }

    document.getElementById("category").textContent = category;
}
    </script>
	<!-- Footer section -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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