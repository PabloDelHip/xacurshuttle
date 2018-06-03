
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Tours y actividades en Cancun y la Riviera Maya</title>
	<link rel="stylesheet" href="{{ url('/css/app.css') }}">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

	<link rel="stylesheet" type="text/css" href="{{ url('/engine1/style.css') }}" />
    <script type="text/javascript" src="{{ url('/engine1/jquery.js') }}"></script>

    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body style="background-image: url('{{ url('/img/textura.png') }}');">


	<header class="col-12">
		<div class="container datos-contacto-header pt-1 pb-1">
			<div class="row justify-content-end">
				<div class="datos-header">
					<i class="fab fa-whatsapp"></i>
					<span>
						<a href="https://api.whatsapp.com/send?phone=5219983183166&text=Buen dia, estoy interesado en unos tours" target="_blank"> +52 1 998 318 3166</a>
					</span>
				</div>
				<div class="datos-header">
					<i class="fas fa-phone"></i>
					<span>
						<a href="tel:9983850941"> +52 1 998 385 0941</a>
					</span>
				</div>
				<div class="datos-header">
					<span>
						<a href="mailto:reservas@gocancuntours.com.mx"><i class="fas fa-envelope"></i> reservas@gocancuntours.com.mx</a>
					</span>
				</div>

				<div class="datos-header carrito">
					<span>
						<a href="#"><i class="fas fa-shopping-cart"></i> 0</a>
					</span>
				</div>
				<div>
					<img src="{{ url('/img/bandera-mexico.png') }}" alt="bandera de mexico">
				</div>

				<div class=" datos-header box justify-content-start">

			      <select>
			        <option value="MXN">MXN</option>
			        <option value="USD">USD</option>
			      </select>

			    </div>
			</div>
		</div>
	</header>
	<!-- FINAL HEADER -->

	<div class="contenedor-menu">
		<div class="container" >
		  	<nav class="navbar navbar-expand-lg navbar-light" style="border: none;">
						<a class="navbar-brand" href="{{ url('/') }}">
								<img src="{{ url('/img/logo.png') }}" alt="logo" style="height: 50px;">
						</a>
					  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					    	<span class="navbar-toggler-icon"></span>
					  	</button>

					 	 <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
					    	<ul class="navbar-nav mr-auto">
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 Tours
					        		</a>
						        	<div sty class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="{{ url('/cancun/tours-aventuras') }}">Tours en Cancún</a>
						          		<a class="dropdown-item" href="#">Another action</a>
						         	<div class="dropdown-divider"></div>
						          		<a class="dropdown-item" href="#">Something else here</a>
						        	</div>
					      		</li>
					      		<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 Parques
					        		</a>
						        	<div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="#">Action</a>
						          		<a class="dropdown-item" href="#">Another action</a>
						         	<div class="dropdown-divider"></div>
						          		<a class="dropdown-item" href="#">Something else here</a>
						        	</div>
					      		</li>
					      		<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 Combos
					        		</a>
						        	<div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="#">Action</a>
						          		<a class="dropdown-item" href="#">Another action</a>
						         	<div class="dropdown-divider"></div>
						          		<a class="dropdown-item" href="#">Something else here</a>
						        	</div>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="#">Ofertas <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="#">Habitaciones <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="#">Transportacion <span class="sr-only">(current)</span></a>
					      		</li>
					      		<li class="nav-item dropdown">
					        		<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					         		 Información
					        		</a>
						        	<div class="dropdown-menu sub-menu" aria-labelledby="navbarDropdown">
						          		<a class="dropdown-item" href="#">Action</a>
						          		<a class="dropdown-item" href="#">Another action</a>
						         	<div class="dropdown-divider"></div>
						          		<a class="dropdown-item" href="#">Something else here</a>
						        	</div>
					      		</li>
					      		<li class="nav-item">
					        		<a class="nav-link" href="{{ url('contactanos') }}">Contacto <span class="sr-only">(current)</span></a>
					      		</li>
					    	</ul>
					  </div>
			</nav>
		</div>
	</div>
	<!-- FINAL NAV -->

	<div>
		@yield('contenido')
	</div>

	<footer>
		<div class="footer mt-4 pt-3">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<p class="texto-mailchin m-0">suscríbete para encontrar las mejores ofertas</p>
				</div>
				<div class="col-md-auto mt-2">

					<form class="form-inline">
					  <div class="form-group mb-2">
					    <img src="{{ url('/img/carta.png') }}" alt="carta">
					  </div>
					  <div class="form-group mx-sm-3 mb-2">
					    <label for="email" class="sr-only">Email</label>
					    <input type="email" class="form-control form-control-sm suscripcion" id="email" placeholder="Email" >
					  </div>
					  <button type="submit" class="btn btn-primary mb-2 btn-sm">Suscribirme</button>
					</form>
				</div>
			</div>
			<div class="row justify-content-center">
			    <div class="col-6 text-center iconos-footer mb-3 pb-2">
			     	<a href="#">
			     		<i class="fab fa-facebook-f"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" fab fa-twitter"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" fab fa-youtube"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" fab fa-google-plus-g"></i>
			     	</a>
			     	<a href="#">
			     		 <i class=" fab fa-instagram"></i>
			     	</a>
			    </div>
			</div>
			{{-- FINAL REDES SOCIALES --}}

			<div class="row justify-content-center">
				<img src="{{ url('/img/logo-blanco.png') }}" alt="logo-blanco">
			</div>

			<div class="row justify-content-center">
				<div class="col-9 text-left mt-3 menu-footer">
					<ul class="lista-footer">
						<a href="#">
							<li>Inicio</li>
						</a>
						<a href="#">
							<li>Tours</li>
						</a>
						<a href="#">
							<li>Parques</li>
						</a>
						<a href="#">
							<li>Combos</li>
						</a>
						<a href="#">
							<li>Ofertas</li>
						</a>
						<a href="#">
							<li>Habitaciones</li>
						</a>
						<a href="#">
							<li>Transportacion</li>
						</a>
						<a href="#">
							<li>Blog</li>
						</a>
						<a href="#">
							<li>Contactanos</li>
						</a>
						<a href="#">
							<li>Descuento para quintanarroenses</li>
						</a>
						<a href="#">
							<li>Aviso de privacidad</li>
						</a>
						<a href="#">
							<li>Politicas del sitio</li>
						</a>
						<a href="#">
							<li>Preguntas frecuentes</li>
						</a>
					</ul>
				</div>
			</div>

			<div class="row p-0 m-0">
				<div class="col-12 text-center">
					<p class="p-0 m-0 copy">&copy; Todos los derechos reservados Go Cancun Tours 2018</p>
				</div>
			</div>
		</div>
	</footer>



	<script type="text/javascript" src="{{ url('/engine1/wowslider.js') }}"></script>
	<script type="text/javascript" src="{{ url('/engine1/script.js') }}"></script>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script src="{{ url('/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ url('/js/fastclick.js') }}"></script>
	<script src="{{ url('/js/prism.js') }}"></script>
	<script src="{{ url('/js/parallax.min.js') }}"></script>

		<!-- Smartsupp Live Chat script -->
	<script type="text/javascript">
	var _smartsupp = _smartsupp || {};
	_smartsupp.key = '24fd083b7f92ce42d751ab160bac61c2cd4db4d0';
	window.smartsupp||(function(d) {
	  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
	  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
	  c.type='text/javascript';c.charset='utf-8';c.async=true;
	  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
	})(document);
	</script>

<script>
    $(document).ready(function() {
      $('select:not(.ignore)').niceSelect();
      FastClick.attach(document.body);

      $('.js-example-basic-single').select2();

      /*$('.select2-selection--single').hide();
      $('.ver').show();*/

      $('span[data-select2-id=5]').hide();


    });
  </script>

</body>
</html>
