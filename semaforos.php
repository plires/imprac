<!-- Validaciones del Newsletter -->
<?php // include_once("includes/validaciones-newsletter.inc"); ?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Tag Manager Head -->
		<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Indica pagina activa en el nav menu -->
		<?php $current = 'productos'; ?>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Semáforos para salida de garagge IMPRAC.">

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

		<title>Semáforos para salida de garagge IMPRAC.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_gris fondo_gris_accesorios">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h1 class="h1_centrales h1_accesorios margin_top_30 margin_bottom_60 ">SEMÁFOROS</h1>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja semaforos -->
		<section class="container-fluid margin_bottom_60">
			<div class="container">
				<div class="row parent-container">

					<div class="col-md-4">
						<a title="SEMÁFOROS - IMPRAC" href="img/accesorios/semaforos/semaforos-a.jpg">
							<img class="w-100" src="img/accesorios/semaforos/semaforos-a.jpg" alt="semaforos imprac a">
						</a>
					</div>

					<div class="col-md-4">
						<a title="SEMÁFOROS - IMPRAC" href="img/accesorios/semaforos/semaforos-b.jpg">
							<img class="w-100" src="img/accesorios/semaforos/semaforos-b.jpg" alt="semaforos imprac b">
						</a>
					</div>

					<div class="col-md-4">
						<a title="SEMÁFOROS - IMPRAC" href="img/accesorios/semaforos/semaforos-c.jpg">
							<img class="w-100" src="img/accesorios/semaforos/semaforos-c.jpg" alt="semaforos imprac c">
						</a>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<p class="parrafo_descripcion_textos">
							Semáforo compacto y moderno, ultima tecnología, luz de leds de alta intensidad, gabinete de chapa preparado para resistir intemperie, cubierta frente de acrílico gris de muy buena estética. 
							Disponible en versiones de 3 y 4 cables, para optimizar la instalación según la necesidad 
							requerida.
						</p>
					</div>
				</div>
			</div>
		</section>
		<!-- Faja semaforos end-->

		<!-- Faja Asesoramiento -->
		<?php include_once('includes/faja-asesoramiento.inc'); ?>

		<!-- Newsletter -->
		<?php // include_once('includes/newsletter.inc'); ?>

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
		<?php include_once('includes/footer.inc'); ?>


		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script> 
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Magnific PopUP -->
		<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

		<!-- Comun a todos los productos -->
		<script type="text/javascript" src="js/productos.js"></script>

		<script type="text/javascript">
			$(function () {
			  $('[data-toggle="popover"]').popover()
			})
		</script>


	</body>
</html>