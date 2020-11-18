<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="estilos/buscador.css">
	<link rel="stylesheet" type="text/css" href="estilos/index/index.css">
	
	
	<title>COMIDAS RÁPIDAS DFC</title>
	<link rel="icon" type="imagen/x-icon" href="img/iconos/icono.ico" >	
	

</head>
<body>
	<?PHP ?>
	
	<!--jumbotron-->
	<div class="jumbotron " id="jum">
		<center>
			<img src="img/jumbo/logo empresa2.png" width="50%" >
			
			<hr class="my-4">
			<div class="buscar">
				<input class="btext" type="text" placeholder="Buscar">
				<a  href="#" class="boton1">
					<i class="icon-buscar"></i>
				</a>
			</div>
		</center>
	</div>
	<br>

	<!--navegacion-->
	<nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background:red">		
		<img  src="img/jumbo/logo empresa2.png"  style="min-width: 110px" width="11%" alt="..." loading="lazy">
		<a class="navbar-brand" href="#"></a>

		<button class="navbar-toggler" type="button" data-toggle="collapse"  aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent" style="background:red;">
			<ul class="navbar-nav mx-auto ">
				<li class="nav-item ">
					<a id="lista" class="nav-link disabled"  href="index.php">Home </a>
				</li>					
				<li class="nav-item dropdown active">
					<a id="lista" class="nav-link dropdown-toggle  " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Información
					</a>
					<div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
						<a id="lista" class="dropdown-item disabled " target="new_black" href="quien somos.html">Quién somos</a>						
						<div class="dropdown-divider"></div>
						<a id="lista" class="dropdown-item disabled" target="new_black"   href="contactenos.html">Contactanos</a>
					</div>
				</li>
				<li class="nav-item active">
					<a id="lista" class="nav-link disabled"  target="new_black" href="ubicanos.html">Nuestras sedes</a>
				</li>
				<li class="nav-item active">
					<a id="lista" class="nav-link disabled" target="new_black" href="dfc kids.html">DFC Kids</a>
				</li>
				<li class="nav-item active">
					<a id="lista" class="nav-link" target="new_black" href="login.html">Log in</a>
				</li>				
			</ul>    
		</div>
	</nav>

	<button type="button" class="btn btn-primary fixed-top" data-toggle="modal" data-target="#modaluno" style=" margin-top: 150px;border-radius: 5% 20px; display:visibility"> <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		<path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/1>
		</svg>									
	</button>

	<!-- carrucel--->
	<div class="container-fluid" style="background-color: red; text-align: center">
		<br>
		<div class="container-fluid">
			<div class="row " >
				<div class="col-sm "  style="background: radial-gradient(50%  100%,  white, orange )" >
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/carru/logo empresa2.png" style="width: 80%; " alt="...">
								<div class="carousel-caption d-none d-md-block">

								</div>
							</div>
							<div class="carousel-item">
								<img src="img/carru/domicilios.png" style="width: 39.3%;" alt="...">
								<div class="carousel-caption d-none d-md-block">

								</div>
							</div>
							<div class="carousel-item">
								<img src="img/carru/visitanos1.png" style="width: 80%; " alt="...">
								<div class="carousel-caption d-none d-md-block">								
								</div>
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next " href="#carouselExampleCaptions" role="button" data-slide="next">
							<span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>

			</div>
		</div>
		<br>
	</div>
	<br>
	
	<!--lugar de productos-->
	<div class="container-fluid" style=" text-align: center;">
		<div class="container-fluid" >
			<h1>EMPANADAS</h1>
			<div class="row ">

				<div class="col-sm  "  style="margin-right: 2.5% ">
					<br>
					<h4>CARNE</h4>
					<div>
						<img src="img/empa/empanada.jpg" width="65%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid " >
						<br>						
						<div class="row " style="border:2px solid" >
							<div class="col-sm"  style="margin-right: 2.5%;margin-left: 4% ;width:45%; ">
								<h2>GASEOSAS</h2>
								<div>
									<ul>
										<li>Coca cola </li>
										<li>Pepsi </li>
										<li>7 up </li>
										<li>Cuatro </li>
										<li>Uva </li>
										<li>Colombiana</li>
									</ul> 
									
								</div>								
							</div>
							<div class="col-sm"  style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> 15 X $ 5000 </p>
									<h4>Precio especial</h4>
									<p>20 X $ 10.000 más gaseosa</p>
									
								</div>

							</div>							
						</div>
						<br>
					</div>

				</div>
				<div class="col-sm "  >
					<br>
					<h4>POLLO</h4>
					<div>
						<img src="img/empa/empanadas2.jpg" width="48%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid">
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>
										<li>Coca cola </li>
										<li>Pepsi </li>
										<li>7 up </li>
										<li>Cuatro </li>
										<li>Uva </li>
										<li>Colombiana</li>
									</ul> 
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> 15 X $ 5000 </p>
									<h4>Precio especial</h4>
									<p>20 X $ 10.000 más gaseosa</p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div class="container-fluid" style=" text-align: center">
		<div class="container-fluid">
			<h1>SALCHIPAPAS</h1>
			<div class="row" >

				<div class="col-sm "  style="margin-right: 2.5% ">
					<br>
					<h4>ESPECIALES</h4>
					<div>
						<img src="img/salchipapa/salchipapa-especial.jpg" width="50%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid ">
						<br>						
						<div class="row " style="border:2px solid">
							<div class="col-sm " style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>		
								</div>								
							</div>
							<div class="col-sm "  style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 7.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 11.000 más gaseosa </p>
															
								</div>								
							</div>							
						</div>
						<br>
					</div>
				</div>
				<div class="col-sm"  >
					<br>
					<h4>SENCILLAS</h4>
					<div>
						<img src="img/salchipapa/salchipapa_nota.jpg" width="50%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid">
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>							
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;"  >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 5.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 8.000 más gaseosa </p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div class="container-fluid" style=" text-align: center">
		<div class="container-fluid">
			<h1>PERROS</h1>
			<div class="row">

				<div class="col-sm"  style="margin-right: 2.5% ">
					<br>
					<h2> ESPECIALES</h2>
					<div>
						<img src="img/perro/hot dog especial.jpg" width="55%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid " >
						<br>						
						<div class="row" style="border:2px solid">
							<div class="col-sm " style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>		
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> $ 7.000 </p>
									<h4>Precio especial</h4>
									<p> $ 13.000 más limonada </p>
															
								</div>								
							</div>							
						</div>
						<br>
					</div>
				</div>
				<div class="col-sm "  >
					<br>
					<h2> SENCILLAS</h2>
					<div>
						<img src="img/perro/hot dog sencillo.jpg" width="65%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid">
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>							
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 6.500 </p>					
									<h4>Precio especial</h4>
									<p> $ 7.500 más gaseosa </p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div class="container-fluid" style=" text-align: center">
		<div class="container-fluid">
			<h1>HAMBURGUESAS</h1>
			<div class="row ">

				<div class="col-sm "  style="margin-right: 2.5% ">
					<br>

					<h2>ESPECIALES</h2>
					<div>
						<img src="img/burger/burger especial.jpg" width="65%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid " >
						<br>						
						<div class="row " style="border:2px solid">
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 9.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 12.500 más gaseosa </p>
																	
								</div>								
							</div>							
						</div>
						<br>
					</div>
				</div>
				<div class="col-sm "  >
					<br>
					<h2>SENCILLAS</h2>
					<div>
						<img src="img/burger/burger sencilla.jpeg" width="65%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid">
							<div class="col-sm"  style="margin-right: 2.5%;margin-left: 4% ;width:45%; border: 2.5%">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> $ 8.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 10.000 más gaseosa </p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<div class="container-fluid" style="; text-align: center">
		<div class="container-fluid">
			<h1>ALITAS BBQ</h1>
			<div class="row ">

				<div class="col-sm "  style="margin-right: 2.5% ">
					<br>
					<h2>ESPECIALES</h2>
					<div>
						<img src="img/alitas/alitas bbq.jpg" width="54%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid " s>
						<br>						
						<div class="row " style="border:2px solid">
							<div class="col-sm"  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm" style="margin-right: 2.5%; width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> $ 12.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 20.000 más gaseosa </p>
																
								</div>								
							</div>							
						</div>
						<br>
					</div>
				</div>
				<div class="col-sm"  >
					<br>
					<h2>SENCILLAS</h2>
					<div>
						<img src="img/alitas/alitas bbq2.jpg" width="53%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid">
							<div class="col-sm"  style="margin-right: 2.5%; margin-left: 4% ; width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 8.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 18.000 más gaseosa </p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<!---MANDINGAS-->
	<div class="container-fluid" style=" text-align: center">
		<div class="container-fluid">
			<h1>MANDINGAS</h1>
			<div class="row ">

				<div class="col-sm "  style="margin-right: 2.5% ">
					<br>
					<h2>ESPECIALES</h2>
					<div>
						<img src="img/mandingas/mandinga.jpg" width="44%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid " >
						<br>						
						<div class="row" style="border:2px solid">
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p> $ 15.000 </p>			
									<h4>Precio especial</h4>
									<p> $ 20.000 más gaseosa </p>
																	
								</div>								
							</div>							
						</div>
						<br>
					</div>
				</div>
				<div class="col-sm"  >
					<br>
					<h2>SENCILLAS</h2>
					<div>
						<img src="img/mandingas/mandianga_sencilla.jpg" width="72%" alt="..." loading="lazy" style="border-radius: 10px;">
					</div>					
					<hr class="my-4" style="background-color: black;">
					<div class="container-fluid" >
						<br>
						<div class="row " style="border:2px solid" >
							<div class="col-sm "  style="margin-right: 2.5%;margin-left: 4% ;width:45%;">
								<h2>GASEOSAS</h2>
								<div>
									<ul>		
										<li>Coca cola</li>
										<li>Pepsi</li>
										<li>7 up</li>
										<li>Cuatro</li>
										<li>Uva</li>
										<li>Colombiana</li>
									</ul>
								</div>								
							</div>
							<div class="col-sm " style="margin-right: 2.5%;width:45%;" >
								<h2>PRECIOS</h2>
								<div>
									<p>$ 9.000 </p>					
									<h4>Precio especial</h4>
									<p> $ 16.000 más gaseosa </p>
									
								</div>								
							</div>
						</div>
						<br>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<br>
	<!--video-->

	<div class="container-fluid" style=" background:radial-gradient(50%  100% , red, orange, gray );" >
		<center>
			<button id="cocina" type="button" class="btn bg-success">
				<a id="cocina" href= "https://www.elespanol.com/cocinillas/recetas/20151001/cenas-rapidas-no-complicarse-vida-mes/1000273022696_30.html">Cocinillas
				</a>
			</button>
		</center>
		<div class="container-fluid bg-transparente" >
			<h3 style="text-align: center"><b>RECETAS</b></h3>
			<div class="row -sm">
				<div class="embed-responsive embed-responsive-21by9">
					<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9z_Zs05IFlg" allowfullscreen></iframe>
				</div>
				
			</div>
		</div>
		<br>
	</div>
	<br>
	<!--footer-->
	<div class="container-fluid " style="background-color: red; text-align: center; border-radius-top: 20%">
		<div class="container-fluid">			
			<div class="row ">
				<div class="col-sm "  style="margin-right: 2.5% ; width:45%">
					<div>
						<br>
						<ul>
							<li class="uno">CORREO: DFCFOOD@GMAIL.COM</li>
							<li class="dos">TELEFONO: 5230990</li>
							<li class="tres">DIRECCIÓN: CR 50 # 104- 60</li>
						</ul>
					</div>
				</div>
				<div class="col-sm" style="width:45% " >
					<div>
						<br>
						<ul>
							<li class="cuatro">FACEBOOK</li>
							<li class="cinco">YOUTUBE</li>
							<li class="seis ">INSTRAGRAM</li>
						</ul>
					</div>
				</div>
			</div>
		</div>		
	</div>




	<!---modal dos para clientes no registrados-->

	<div class="modal fade" id="modaluno" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Compras</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="formulario">
						<div class="form-group">
							<label for="formGroupExampleInput">Datos </label>
							<input type="text" class="form-control" id="name" placeholder="Ingrese su Nombre">
						</div>
						<div class="row">
							<div class="col">
								<input type="text" class="form-control" placeholder="Dirección" id="direc" >
							</div>
							<div class="col">
								<input type="text" class="form-control" placeholder="Teléfono" id="tel">
							</div>
						</div>  
					
					<br>
					<hr>
					<p> Indique el Producto a comprar</p>
					<label for="genero">Indique Comida:</label><br>
					<select id="comidarap" class="form-control form-control-sm">
						<option value='-'> -</option>
						<option value='EMPANADAS'>EMPANADAS</option>
						<option value='SALCHIPAPAS'>SALCHIPAPAS</option>
						<option value='PERROS'>PERROS</option>
						<option value='HAMBURGUESAS'>HAMBURGUESAS</option>
						<option value='ALITAS BBQ'>ALITAS BBQ</option>
						<option value='MANDINGAS'>MANDINGAS</option>
					</select>
					<label for="genero">Tipo Comida:</label><br>
					<select  id="tipocomida" class="form-control form-control-sm">
						<option value='-'> -</option>
						
					</select>
					<label for="genero">Cantidad:</label><br>
					<select id="canti" class="form-control form-control-sm">
						<option value='-'> -</option>
					</select>
					<label for="genero">Indique el valor:</label><br>
					<select  id="valorpro" class="form-control form-control-sm">
						<option value='-'> -</option>
					</select>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal" id="cance" >Cancelar</button>
					<button type="button" class="btn btn-primary" data-dismiss="modal" id="comp">Comprar</button>
				</div>
			</div>
		</div>
	</div>




	




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/index.js"></script>
</body>
</html>