<?php use App\Http\Controllers\Sitio; ?>
@extends('layout')

@section('contenido')

		<section class="mt-3">
			<article>
				<div id="wowslider-container1">
					<div class="ws_images">
						<ul>
							<li><img src="data1/images/imagen1.png" alt="imagen1" title="imagen1" id="wows1_0"/></li>
							<li><a href="http://wowslider.net"><img src="data1/images/imagen2.png" alt="javascript slider" title="imagen2" id="wows1_1"/></a></li>
							<li><img src="data1/images/imagen3.png" alt="imagen3" title="imagen3" id="wows1_2"/></li>
						</ul>
					</div>
					<div class="ws_bullets">
						<div>
							<a href="#" title="imagen1"><span><img src="data1/tooltips/imagen1.png" alt="imagen1"/>1</span></a>
							<a href="#" title="imagen2"><span><img src="data1/tooltips/imagen2.png" alt="imagen2"/>2</span></a>
							<a href="#" title="imagen3"><span><img src="data1/tooltips/imagen3.png" alt="imagen3"/>3</span></a>
						</div>
					</div>
					<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">html slideshow</a> by WOWSlider.com v8.8</div>
					<div class="ws_shadow"></div>
				</div>
			</article>


		<!-- FINAL SLIDER -->
		<div class="container p-md-0">

			<div class="row">

				<div class="col-md-12 p-md-0">


					<span>
						<div class="row p-0 m-0">
							<article class="col-12 mt-4">
								<h1 class="titulo pb-1 mb-2">tours y actividades en cancún</h1>
								<h3 class="text-capitalize">Los mejores tours en cancún a precio de descuento</h3>
								<div class="contenido text-justify">
									<p>
										Bienvenido a Cancún Adventure Tours donde encontrarás información sobre atracciones, excursiones y paseos en Cancún y la Riviera Maya en México.
									</p>
									<p>Descubre la verdadera aventura en Cancún con nuestra oferta de actividades la cual siempre estamos incrementando y mejorando de acuerdo a los comentarios de nuestros clientes, todo esto con los mejores precios y descuentos.</p>
									<p>Cancún es la puerta a increibles tours de aventura en el Caribe Mexicano. La diversión está garantizada, puedes "volar" sobre la jungla en una tirolesa, nadar con delfines, practicar esnorquel o bucear dentro de los muchos cenotes que se encuentran en la península de Yucatán; también puedes visitar algunos de los maravillosos parques ecológicos localizados en la Riviera Maya</p>
									<p>Otros tours te llevarán a conducir tu propio speed boat por manglares de la laguna de Cancún como el famoso jungle tour. También ofrecemos varios tours donde descubrirás la maravillosa cultura maya que puede apreciarse en los distintos sitios arqueológicos como Tulum o Chichén Itzá</p>
								</div>
							</article>
						</div>
						<!-- FINAL DESCRIPCION -->
                    </span>

                    @foreach($categories as $categorie)
                    <span>
                        <div class="row p-0 m-0">
							<article class=" col-md-12 mt-5">
								<h2 class="titulo">{{ $categorie->name }}</h2>
								<div class="contenido text-justify">
                                    {!! $categorie->description !!}
								</div>
							</article>
                        </div>
                        <div class="row col-12  pl-md-5 pr-md-5 ml-1">
                                <div class="slider responsive contenedor-carrousel">

                                    @foreach(Sitio::toursHome($categorie->id) as $tour)
                                        <div class="col-3">
                                            <div>
                                                <div class="contenedor m-0 p-0">
                                                    <a href='{{ url("{$tour->url}", "informacion") }}'>
                                                        <img src="{{ url('img/tours/') }}/{{$tour->image}}"  class="img-fluid p-0 m-0" alt="xcaret" style="width: 100%; height: 100%;">
                                                    </a>
                                                </div>
                                                <div class="contenedor-texto p-2 mb-1">
                                                    <h2>{{$tour->name}}</h2>
                                                    <div>
                                                        <p><i class="fa fa-clock-o" aria-hidden="true"></i> Duración: {{ $tour->duration }}</p>
                                                        <p><i class="fa fa-user" aria-hidden="true"></i> Persona: 1</p>
                                                        <p class="precio-contenedor">${{ $tour->adult_price }}</p>
                                                        <a style="float: right;" href='{{ url("{$tour->url}", "informacion") }}' class="btn btn-sm">Ver tour</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                    </span>
                    @endforeach

				</div>

				<!-- FINAL DIV MAIN -->
			</div>
		</div>
	</section>


@stop
