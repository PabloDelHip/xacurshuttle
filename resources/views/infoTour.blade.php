@extends('layout')

@section('contenido')

@include('includes.migajas', array('miVar' => 'Tours > Cancún'))
<div class="container">
		<div class="row mt-2">
			<div class="col-9 p-0 m-0">
				<h1 class="titulo pb-1 mb-2 mt-2">Xcaret Basico</h1>
				<div class="col-12">
					<div class="carousel slide" id="principal-carousel" data-ride="carousel">

						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="{{ url('/img/carousel1.jpg') }}" alt="">
							</div>

							<div class="carousel-item">
								<img src="{{ url('/img/carousel1.jpg') }}" alt="">
							</div>

							<div class="carousel-item">
								<img src="{{ url('/img/carousel1.jpg') }}" alt="">
							</div>
						</div>

						<a href="#principal-carousel" class="carousel-control-prev" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Anterior</span>
						</a>

						<a href="#principal-carousel" class="carousel-control-next" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Siguiente</span>
						</a>
					</div>
				</div>{{-- FINAL CAROUSEL --}}

				<div class="col-12">
					<a href="#" class="btn btn-danger btn-sm mt-2">INFORMACION Y COTIZACION AQUI</a>
				</div>

				<div class="col-12 mt-2 pt-2" >
					<ul class="nav nav-tabs" id="myTab" role="tablist" style="background-color: #fff;">
					  <li class="nav-item">
					    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
					  </li>
					</ul>
					<div class="tab-content p-2" id="myTabContent" style="background-color: #fff;">
					  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
					  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
					  	<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</div>
					</div>
				</div> {{-- FINAL NAV-TAPS --}}

				<div class="col-12 mt-3 p" style="background-color: #fff;">
					<div class="row tours-relacionados">
                        <div class="col-12">
                            <p class="h4 m-2">Tours relacionados</p>
                        </div>
						<div class="col-3 p-0">
							<div class="col-12 text-center">
                                <a href="#">
                                    <img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0 mb-2">
                                    Xcaret basico
                                </a>
                            </div>
						</div>
						<div class="col-3 p-0">
							<div class="col-12 text-center">
                                <a href="#">
                                    <img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0 mb-2">
                                    Xcaret basico
                                </a>
                            </div>
						</div>
						<div class="col-3 p-0">
							<div class="col-12 text-center">
                                <a href="#">
                                    <img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0 mb-2">
                                    Xcaret basico
                                </a>
                             </div>
						</div>
						<div class="col-3 p-0">
							<div class="col-12 text-center">
                                <a href="#">
                                    <img src="http://placeimg.com/190/150/nature" alt="xcaret" class="img-fluid p-0 m-0 mb-2">
                                    Xcaret basico
                                </a>
                            </div>
                        </div>

                        <div class="col-12 text-right mt-2 mb-2">
                            <a href="#" class="btn btn-primary btn-sm">Ver todos los tours</a>
                        </div>
					</div>
				</div>
			</div>

			@include('includes.aside')

			{{-- <div class="col-3">
				<div class="card">
				  <div class="card-header">
				    Quote
				  </div>
				  <div class="card-body">
				    <blockquote class="blockquote mb-0">
				      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
				      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
				    </blockquote>
				  </div>
				</div>
			</div> --}}


		</div>


	</div>




@stop
