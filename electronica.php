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
		<meta name="description" content="Centrales electronicas, receptores, transmisores completan nuestra linea de electronica para automatismos de portones.">

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

		<title>Centrales electronicas, Receptores y Transmisores Imprac</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_electronica">
			<div class="container">
				<div class="row">

					<div class="col-md-6 text-right align_vertical_horizontal">
						<div>
							<h2 class="h2_electronica margin_top_30 margin_bottom_60 ">ELECTRÓNICA</h2>
								<p>
									<span class="frase_slide_mayor">
										Dispositivos electrónicos para
										la automatizacion de portones.
									</span>
								</p>
								<p>
									<span class="frase_slide_menor">
										Especialmente diseñados para 
										controlar los motores comunmente 
										utilizados en la automatizacion.
									</span>
								</p>
						</div>
					</div>

					<div class="slide_imagen col-md-6 text-center align_vertical_horizontal">
						<div>
							<img class="w-100" src="img/electronica/central-header.png" alt="centrales">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja familia de electronica -->
		<section class="container-fluid margin_bottom_30">
			<div class="container">
				<div class="row">

					<div class="col-md-4 text-center">
						<div class="contenedor">
							<a href="centrales.php">
								<img class="w-100 imagen" src="img/electronica/centrales.jpg" alt="centrales">
							</a>
						</div>
						<a class="faja_electronica" href="centrales.php">CENTRALES</a>
						<a href="centrales.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

					<div class="col-md-4 text-center">
						<div class="contenedor">
							<a href="receptores.php">
								<img class="w-100 imagen" src="img/electronica/receptores.jpg" alt="receptores">
							</a>
						</div>
						<a class="faja_electronica" href="receptores.php">RECEPTORES</a>
						<a href="receptores.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

					<div class="col-md-4 text-center">
						<div class="contenedor">
							<a href="transmisores.php">
								<img class="w-100 imagen" src="img/electronica/transmisores.jpg" alt="transmisores">
							</a>
						</div>
						<a class="faja_electronica" href="transmisores.php">TRANSMISORES</a>
						<a href="transmisores.php" class="btn_contacto btn_electronica margin_top_10">
							VER MÁS
						</a>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja familia de electronica end-->

		<!-- Faja Electronica Texto -->
		<section class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3 class="h3_electronica color_principal margin_top_30 margin_bottom_60 bold">ÚLTIMA TECNOLOGÍA</h3>
					<p>
						Todos nuestros productos están fabricados con los adelantos tecnológicos más recientes, brindando calidad y eficiencia. Además contamos con un amplio stock de repuestos de todas nuestras piezas. 
					</p>
					<h3 class="color_secundario margin_top_30 margin_bottom_60 bold">Calidad y eficiencia garantizada</h3>
				</div>
			</div>
		</section>
		<!-- Faja Electronica Texto end-->

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