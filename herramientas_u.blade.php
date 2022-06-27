<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link href="imgs/favicon.ico" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/flaticon.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/style.css"/>
  <script src="//code.tidio.co/emmvslw40kuqkoq1qf444jrdnoe27jvp.js" async></script>
  <title>HERRAMIENTAS</title>
</head>

<body>
  <div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<div><header class="header-section">
		<a href="/" class="site-logo">
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
			<li><a href="/">INICIO</a></li>
			<li><a href="classes">/ EJERCICIO </a></li>
			<li class="active">/ COMPRAS</li>
			<li><a href="#">/ LOGIN</a></li>
		</ol>
	</div>

  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-md-7 container-search">
        <h5>Buscar:</h5>
        <center>
          <div class="input-group mb-12">
            <input type="text" class="form-control" id="input-search" placeholder="Search..." />
            <button style="background-color:black;" id="Filtros">
              <h6><small>Busqueda por filtros</small></h6>
            </button>
          </div>
        </center>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row justify-content-md-center" id="Div-filtros">
      <div class="col-md-7">
        <form action="" id="form-filtros">
          <div class="container">
            <div class="row">
              <div class="col-2">
                <h7><small>Marcuernas</small></h7>
                <br>
                <input type="checkbox" onclick="uncheck()" class="form-check-input" id="M" name="1" value="1" />
              </div>
              <div class="col-2">
                <h7><small>Barra</small></h7>
                <br>
                <input type="checkbox" onclick="uncheck()" class="form-check-input" id="B" name="2" value="2" />
              </div>
              <div class="col-2">
                <h7><small>Ligas</small></h7>
                <br>
                <input type="checkbox" onclick="uncheck()" class="form-check-input" id="L" name="3" value="3" />
              </div>
              <div class="col-2">
                <h7><small>Rueda</small></h7>
                <br>
                <input type="checkbox" onclick="uncheck()" class="form-check-input" id="R" name="4" value="4" />
              </div>
              <div class="col-2">
                <h7><small>Pelota</small></h7>
                <br>
                <input type="checkbox" onclick="uncheck()" class="form-check-input" id="P" name="5" value="5" />
              </div>
              <div class="col-2">
                <button class="btn btn-danger boton-buscqueda" onclick="Buscar();">Buscar</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row" id="Contenedor-productos"> </div>
  </div>

  <style>
    .container-search {
      margin-top: 10px;
    }

    .div-filtros {
      margin-top: 0px;
    }

    #Producto-alimento {
    border: 1px solid rgb(255, 255, 255);
    margin: 20px 0 0 -20px;
    padding: 2px 16px;
    position: relative;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    background-color: white;
    text-align: center;
    }

    #imagen-producto {
      width: 200px; 
    }

    h6{
      color: #fff
    }

  </style>


  <script>
    function uncheck() {
      var checkbox1 = document.getElementById("M");
      var checkbox2 = document.getElementById("B");
      var checkbox3 = document.getElementById("L");
      var checkbox4 = document.getElementById("R");
      var checkbox5 = document.getElementById("P");
      checkbox1.onclick = function() {
        if (checkbox1.checked != false) {
          checkbox2.checked = null;
          checkbox3.checked = null;
          checkbox4.checked = null;
          checkbox5.checked = null;
        }
      }
      checkbox2.onclick = function() {
        if (checkbox2.checked != false) {
          checkbox1.checked = null;
          checkbox3.checked = null;
          checkbox4.checked = null;
          checkbox5.checked = null;
        }
      }
      checkbox3.onclick = function() {
        if (checkbox3.checked != false) {
          checkbox1.checked = null;
          checkbox2.checked = null;
          checkbox4.checked = null;
          checkbox5.checked = null;
        }
      }
      checkbox4.onclick = function() {
        if (checkbox4.checked != false) {
          checkbox1.checked = null;
          checkbox2.checked = null;
          checkbox3.checked = null;
          checkbox5.checked = null;
        }
      }
      checkbox5.onclick = function() {
        if (checkbox4.checked != false) {
          checkbox1.checked = null;
          checkbox2.checked = null;
          checkbox3.checked = null;
          checkbox4.checked = null;
        }
      }
    }

    $(document).ready(function() {
      $('#Div-filtros').slideUp(50);
      estado = 0;
      $("#Filtros").click(function() {
        if (estado == 0) {
          $('#Div-filtros').slideUp('fast');
          $("#input-search").prop('disabled', false);
          estado = 1;
        } else {
          $('#Div-filtros').slideDown('fast');
          $("#input-search").prop('disabled', true);
          estado = 0;
        }
      });
    });

    $(buscar_datos());

    function Buscar() {
      var consulta = $("#form-filtros").serialize();
      buscar_datos(consulta);
      event.preventDefault();
      return false;
    }

    function buscar_datos(consulta) {
      $.ajax({
          url: "/GYM/Gym/Buscar_herramientas.php",
          type: "POST",
          dataType: "html",
          data: {
            consulta: consulta,
          },
        })
        .done(function(respuesta) {
          $("#Contenedor-productos").html(respuesta);
        })
        .fail(function() {});
    }

    $(document).on("keyup", "#input-search", function() {
      var valor = $(this).val();
      if (valor != "") {
        buscar_datos(valor);
      } else {
        buscar_datos();
      }
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
                <a href="https://gymvirtualhuejutla.000webhostapp.com/aviso.html">AVISO DE PRIVACIDAD</a>
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