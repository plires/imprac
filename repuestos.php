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
		<meta name="description" content="repuestos e insumos para la automatizacion de portones.">

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

		<title>Estatores, bobinados, carcazas, engranajes. automatizacion de portones</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_accesorios fondo_repuestos">
			<div class="container padding_top_30">
				<div class="row">

					<div class="col-md-6 text-right align_vertical_horizontal">
						<div>
							<h2 class="h2_electronica h2_repuestos margin_top_30 margin_bottom_60 ">REPUESTOS ORIGINALES</h2>
								<p>
									<span class="frase_slide_mayor">
										Disponemos de todos los repuestos
										necesarios para las reparaciones de
										los sistemas de automatización.
									</span>
								</p>
						</div>
					</div>

					<div class="slide_imagen col-md-6 text-center align_vertical_horizontal margin_top_30">
						<div>
							<img class="w-100" src="img/accesorios/repuestos/repuestos-header.png" alt="repuestos imprac">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->


		<!-- Faja Repuestos Texto -->
		<section class="container margin_bottom_60">
			<div class="row">
				<div class="col-md-8 offset-md-2 text-center">
					<h3 class="h3_electronica h3_repuestos color_principal margin_top_30 margin_bottom_60 bold">COMPROMISO <strong>REPUESTO SEGURO</strong></h3>
					<h4 class="color_principal bold">
						Estatores, Bobinados, Ejes, Coronas, Engranajes, Carcazas, etc.						
					</h4>
					<p class="parrafo_descripcion_textos">
						Todos los productos de nuestra fabricación cuentan con respaldo de repuestos originales de por vida, como así también fabricamos repuestos para el resto de las marcas del mercado que distribuimos.  
					</p>
				</div>
			</div>
		</section>
		<!-- Faja Repuestos Texto end-->

		<!-- Faja Repuestos Texto -->
		<section class="container margin_bottom_60">
			<div class="row">
				<div class="col-md-12 text-center">
					<img class="w-100" src="img/accesorios/repuestos/imagen-general-repuestos.png" alt="repuesto imprac">
				</div>
			</div>
		</section>
		<!-- Faja Repuestos Texto end-->

		<!-- Faja imagenes repuestos Texto
		<section class="container">
			
			<div class="row">
				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/carcaza.jpg" alt="carcaza motor levadizo">
					<h4 class="h4_repuestos text-center">Carcaza de motor Levadizo</h4>
				</div>

				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/engranaje.jpg" alt="engranaje">
					<h4 class="h4_repuestos text-center">Engranajes</h4>
				</div>

				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/bobinado.jpg" alt="bobinados">
					<h4 class="h4_repuestos text-center">Bobinados</h4>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/engranajes-internos.jpg" alt="engranajes internos">
					<h4 class="h4_repuestos text-center">Engranajes Internos</h4>
				</div>

				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/estatores.jpg" alt="estatores">
					<h4 class="h4_repuestos text-center">Estatores</h4>
				</div>

				<div class="col-md-4 text-center margin_bottom_60">
					<img class="w-100 repuestos_img" src="img/accesorios/repuestos/eje-principal.jpg" alt="eje principal del motor">
					<h4 class="h4_repuestos text-center">Eje Principal</h4>
				</div>
			</div>

		</section>
		Faja imagenes repuestos Texto end-->

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