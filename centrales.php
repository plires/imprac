<!-- Validaciones del Newsletter -->
<?php
// include_once("includes/validaciones-newsletter.inc");
?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Tag Manager Head -->
		<?php include_once 'includes/tag_manager_head.inc'; ?>
		
		<!-- Indica pagina activa en el nav menu -->
		<?php $current = 'productos'; ?>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Centrales electronicas para motores. Centrales para equipos rapidos y de velocidad normal. Compatibles con todas las marcas del mercado">

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="img/apple-icon.png">
		<link rel="icon" href="img/favicon.png">

		<!-- Normalize CSS -->
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">

		<!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/app.css">

		<title>Centrales electrónicas para automatización de portones.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once 'includes/tag_manager_head.inc'; ?>
		
		<!-- Header -->
		<?php include_once 'includes/header.inc'; ?>

		<!-- WhatsApp -->
		<?php include_once 'includes/wapp.inc'; ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_integrado">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h2 class="h2_electronica h2_centrales margin_top_30 margin_bottom_60 ">CENTRALES ELECTRÓNICAS</h2>
							<div class="row">
								<div class="col-md-6 offset-md-3">
								<p>
									<span class="frase_slide_mayor">
										Dispositivos electrónicos para la automatización de portones.

									</span>
								</p>
								<p>
									<span class="frase_slide_menor">
										Fabricadas en nuestro país bajo las más estrictas normas de calidad.
										Compatibles con las principales marcas del mercado.
										Versiones para equipos de automatización semi rápidos y rápidos.
									</span>
								</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja familia de electronica -->
		<section class="container-fluid margin_bottom_60">
			<div class="container">
				<div class="row">

					<div class="col-md-4 text-center margin_bottom_30">
						<div class="contenedor">
							<a href="central-cteco.php">
								<img class="w-100 imagen" src="img/electronica/cteco.jpg" alt="central para porton automatico cteco">
							</a>
						</div>
						<img class="titulo_centrales" src="img/electronica/cteco-titulo.gif" alt="logo cteco para central porton automatico">
						<p class="parrafo_familia_home">
							Dispositivo electrónico capaz de controlar 
							motores de fase partida (3 cables) utilizados 
							comúnmente para motores de velocidad semi-rápida
						</p>
						<a href="central-cteco.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

					<div class="col-md-4 text-center margin_bottom_30">
						<div class="contenedor">
							<a href="central-eco-1hp.php">
								<img class="w-100 imagen" src="img/electronica/tkr.jpg" alt="central para porton automatico tkr">
							</a>
						</div>
						<img class="titulo_centrales" src="img/electronica/centrales/eco-1hp-titulo-principal.png" alt="logo eco 1hp para central porton automatico">
						<p class="parrafo_familia_home">
							Dispositivo electrónico capaz de controlar 
							motores de fase partida (3 cables) especialmente diseñada para ser aplicada en la <strong>línea de motores ICON.</strong>
						</p>
						<a href="central-eco-1hp.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

					<div class="col-md-4 text-center margin_bottom_30">
						<div class="contenedor">
							<a href="central-eco-ecode.php">
								<img class="w-100 imagen" src="img/electronica/tkr-f1.jpg" alt="central para porton automatico eco ecode">
							</a>
						</div>
						<img class="titulo_centrales" src="img/electronica/centrales/eco-ecode-titulo-principal.png" alt="logo eco ecode para central porton automatico">
						<p class="parrafo_familia_home">
							Dispositivo electrónico capaz de controlar 
							motores de fase partida (3 cables), línea <strong>ICON ultra veloz</strong>
						</p>
						<a href="central-eco-ecode.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja familia de electronica end-->

		<!-- Faja Asesoramiento -->
		<?php include_once 'includes/faja-asesoramiento.inc'; ?>

		<!-- Newsletter -->
		<?php
// include_once('includes/newsletter.inc');
?>

		<!-- Faja equipo frase -->
		<section class="container-fluid faja_destacado_equipo">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<span class="frase">
							Un <span class="bold">equipo</span> funcionando para vos.
						</span>
					</div>
				</div>
			</div>
		</section>
		<!-- Faja equipo frase end-->

		<!-- Header -->
		<?php include_once 'includes/footer.inc'; ?>

		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		<script src="js/jquery.min.js" type="text/javascript"></script> 
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Comun a todos los productos -->
		<script type="text/javascript" src="js/productos.js"></script>

	</body>
</html>