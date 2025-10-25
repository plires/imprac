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
		<meta name="description" content="Central electronica para motores de porton de uso domiciliario.">

		<!-- Favicons -->
		<link rel="apple-touch-icon" href="img/apple-icon.png">
		<link rel="icon" href="img/favicon.png">

		<!-- Normalize CSS -->
		<link rel="stylesheet" type="text/css" href="css/normalize.min.css">

		<!-- Fontawesome -->
		<link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">

		<!-- Magnific PopUP -->
		<link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600" rel="stylesheet">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/app.css">

		<title>Central electronica CTECO. Para automatizacion de portones.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once 'includes/tag_manager_head.inc'; ?>
		
		<!-- Header -->
		<?php include_once 'includes/header.inc'; ?>

		<!-- WhatsApp -->
		<?php include_once 'includes/wapp.inc'; ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_gris">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h1 class="h1_centrales margin_top_30 margin_bottom_60 ">CENTRAL ELECTRÓNICA</h1>
							<img class="titulo_central" src="img/electronica/centrales/cteco-titulo-principal.png" alt="cteco central electronica para portones automaticos">
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

					<div class="col-md-6 align_vertical_top">
						<div class="parent-container">
							<div class="col-md-12 margin_bottom_60">
								<a title="Central CTECO - IMPRAC" href="img/electronica/centrales/central-cteco-gr.jpg">
									<img class="w-100" src="img/electronica/centrales/central-cteco-gr.jpg">
								</a>
							</div>
							<div class="row margin_bottom_60">
								<div class="col-sm-6 col-md-12 col-lg-6 text center">
									<a title="Central CTECO - IMPRAC" href="img/electronica/centrales/central-cteco-bottom-a.jpg">
										<img class="w-100" src="img/electronica/centrales/central-cteco-bottom-a.jpg">
									</a>
								</div>
								<div class="col-sm-6 col-md-12 col-lg-6 text center">
									<a title="Central CTECO - IMPRAC" href="img/electronica/centrales/central-cteco-bottom-b.jpg">
										<img class="w-100" src="img/electronica/centrales/central-cteco-bottom-b.jpg">
									</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-6 align_vertical_horizontal">
						<div>
							<p class="parrafo_descripcion_textos">
								Dispositivo electrónico capaz de controlar motores de 
								fase partida (3 cables) utilizados comúnmente en la 
								automatización de portones.
								Se puede utilizar en Portones Corredizos, Levadizos y 
								Batientes de 1 hoja.
							</p>

							<p class="parrafo_descripcion_textos bold">Características:</p>
							<ul class="parrafo_descripcion_textos">
								<li>Central compacta manejada por microcontrolador de última tecnología </li>
								<li>Módulo receptor incorporado</li>
								<li>Función de auto-aprendizaje del código de seguridad</li>
								<li>Sistema de Decodificación 12bits y Learning Code</li>
								<li>Embrague electrónico para ajuste de la fuerza del motor</li>
								<li>Salida 24Vca para manejo de accesorios (no apta 
								cerradura)</li>
								<li>Modulo Auxiliar configurable (Cerradura/Semáforo/Luz de Cortesía)</li>
								<li>Potencia máxima del motor a controlar 1/2HP</li>
								<li>Potencia máxima del modulo auxiliar 300w</li>
								<li>Desaceleración diferenciada para Portones Corredizos /Levadizos</li>
								<li>Finales de carrera Analógicos (NA/NC) y Digitales (Reed)</li>
								<li>Cierre Automático Configurable hasta 2 Min</li>
							</ul>
					</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja familia de electronica end-->

		<!-- Faja CTA
		<section class="container-fluid">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<div class="contenedor_plano">
								<h4>Deslizá el mouse sobre la imagen y hace Click en los botones para ver más información</h4>
								<img class="w-100" src="img/electronica/centrales/central-cteco-plano.jpg" alt="plano central cteco">
								<button id="example" type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Conexion 220V.">
									24Vca
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		Faja CTA end-->

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

		<!-- Footer -->
		<?php include_once 'includes/footer.inc'; ?>


		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script> 
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Magnific PopUP -->
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

		<!-- Comun a todos los productos -->
		<script type="text/javascript" src="js/productos.js"></script>

	</body>
</html>