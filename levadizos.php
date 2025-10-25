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
		<meta name="description" content="automatizacion para portones levadizos Imprac. Venta de equipos y repuestos originales.">

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

		<title>Automatizacion para portones levadizos.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_levadizo">
			<div class="container">

				<div class="row">
					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h2 class="h2_electronica h2_motores">SISTEMA LEVADIZO</h2>
							<div class="col-md-6 offset-md-3">
								<p>
									<span class="frase_slide_mayor">
										Contamos con el equipo necesario para tu portón.
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<img src="img/automatizacion/levadizos/icono-levadizo.png" alt="icono automatizacion levadizos">
					</div>
				</div>

			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja texto de levadizos -->
		<section class="container margin_top_30 margin_bottom_60">
			<div class="row">
				<div class="col-md-6 offset-md-3 text-center">
					<p class="parrafo_familia_home">
						Nuestros automatizadores poseen un 
						diseño moderno y compacto, además
						son los más rápidos del mercado.
					</p>
				</div>
			</div>
		</section>
		<!-- Faja texto de levadizos end-->

		<!-- Faja familia de levadizos -->
		<section class="container margin_top_30 margin_bottom_60">
			<div class="row">

				<div class="col-md-6 offset-md-3 text-center margin_bottom_60">
					<a href="levadizo-razzo.php">
						<div class="contenedor cont_levadizos margin_bottom_30">
							<img class="imagen_motores img-fluid" src="img/automatizacion/levadizos/razzo-levadizo.png" alt="levadizo razzo">
						</div>
					</a>
					<img class="margin_bottom_15 img-fluid" src="img/automatizacion/levadizos/logo-razzo.png" alt="logo razzo">
					<p class="parrafo_familia_home">
						Automatizador para portones levadizos, motorreductor super resistente, diseño compacto, motor de &#189; hp.
					</p>
					<a href="levadizo-razzo.php" class="btn_contacto btn_electronica margin_top_10">
						VER MÁS
					</a>
				</div>

			</div>
		</section>
		<!-- Faja familia de levadizos end-->

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

		<!-- Header -->
		<?php include_once('includes/footer.inc'); ?>

		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		<script src="js/jquery.min.js" type="text/javascript"></script> 
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Comun a todos los productos -->
		<script type="text/javascript" src="js/productos.js"></script>

	</body>
</html>