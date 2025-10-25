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
	<meta name="description" content="semaforos, cerraduras, cremalleras completan nuestra linea de accesorios para la automatizacion de portones.">

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

	<title>Semáforos, Cerraduras Electrónicas y Cremalleras</title>
</head>

<body>
	<!-- Tag Manager Body -->
	<?php include_once 'includes/tag_manager_head.inc'; ?>

	<!-- Header -->
	<?php include_once 'includes/header.inc'; ?>

	<!-- WhatsApp -->
	<?php include_once 'includes/wapp.inc'; ?>

	<!-- Faja foto encabezado -->
	<section class="container-fluid fondo_accesorios">
		<div class="container padding_top_60">
			<div class="row">

				<div class="col-md-6 text-right align_vertical_horizontal">
					<div>
						<h2 class="h2_electronica margin_top_30 margin_bottom_60 ">ACCESORIOS</h2>
						<p>
							<span class="frase_slide_mayor">
								Cerraduras, Semáforos, Cremalleras.
							</span>
						</p>
						<p>
							<span class="frase_slide_menor">
								Ofrecemos una completa línea
								de accesorios e insumos que complementan
								la automatización de portones.
							</span>
						</p>
					</div>
				</div>

				<div class="slide_imagen col-md-6 text-center align_vertical_horizontal margin_top_30">
					<div>
						<img class="w-100" src="img/accesorios/accesorios-header.png" alt="accesorios">
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Faja foto encabezado end-->

	<!-- Faja familia de accesorios -->
	<section class="container-fluid margin_bottom_30">
		<div class="container">
			<div class="row">

				<div class="col-md-4 text-center">
					<div class="contenedor">
						<a href="cremalleras.php">
							<img class="w-100 imagen" src="img/accesorios/cremalleras.jpg" alt="centrales">
						</a>
					</div>
					<a class="faja_electronica" href="cremalleras.php">CREMALLERAS</a>
					<a href="cremalleras.php" class="btn_contacto btn_electronica margin_top_10">
						VER MÁS
					</a>
				</div>

				<div class="col-md-4 text-center">
					<div class="contenedor">
						<a href="cerraduras.php">
							<img class="w-100 imagen" src="img/accesorios/cerraduras.jpg" alt="receptores">
						</a>
					</div>
					<a class="faja_electronica" href="cerraduras.php">CERRADURAS</a>
					<a href="cerraduras.php" class="btn_contacto btn_electronica margin_top_10">
						VER MÁS
					</a>
				</div>

				<div class="col-md-4 text-center">
					<div class="contenedor">
						<a href="semaforos.php">
							<img class="w-100 imagen" src="img/accesorios/semaforos.jpg" alt="transmisores">
						</a>
					</div>
					<a class="faja_electronica" href="semaforos.php">SEMÁFOROS</a>
					<a href="semaforos.php" class="btn_contacto btn_electronica margin_top_10">
						VER MÁS
					</a>
				</div>

			</div>
		</div>
	</section>
	<!-- Faja familia de accesorios end-->

	<!-- Faja Electronica Texto -->
	<section class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h3 class="h3_electronica h3_accesorios color_principal margin_top_30 margin_bottom_60 bold">COMPLETA LÍNEA DE ACCESORIOS</h3>
				<p>
					Tenemos todos los productos necesarios para realizar la automatización y brindar comodidad y seguridad para los usuarios, cuidando siempre la calidad y el diseño.
				</p>
				<h3 class="color_secundario margin_top_30 margin_bottom_60 bold">Productos nacionales, de alta calidad</h3>
			</div>
		</div>
	</section>
	<!-- Faja Electronica Texto end-->

	<!-- Faja CTA -->
	<section class="container-fluid faja_destacado_sec">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center align_vertical_horizontal">
					<div>
						<h4 class="h4_electronica">¿Necesitas asesoramiento?</h4>
						<a href="contacto.php" class="btn_cta_electronica btn_sm margin_top_10">CONTACTAR</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Faja CTA end-->

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