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
		<meta name="description" content="Automatizacion e insumos para portones levadizos modelo up-12 de Imprac.">

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

		<title>Automatismo para porton levadizo UP-12 - IMPRAC.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_gris">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h1 class="h1_centrales margin_top_30 margin_bottom_60 ">SISTEMA LEVADIZO</h1>
							<img class="titulo_central" src="img/automatizacion/levadizos/up-12-titulo-ind.png" alt="motor para porton levadizo">
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja familia de electronica -->
		<section class="container-fluid margin_bottom_60">
			<div class="container">
				<div class="row ">

					<div class="col-md-6 text-center">
						<img class="w-100" src="img/automatizacion/levadizos/up-10-individual.jpg" alt="levadizo up 12">
					</div>

					<div class="col-md-6 align_vertical_horizontal">
						<div>
							<p class="parrafo_descripcion_textos descripcion_motores">
								Automatizador para portones levadizos, este modelo tiene la particularidad de ser el más rápido del mercado, realizando el ciclo en 11 segundos. 
								Super resistente, fabricado con los mejores materiales nacionales, diseño compacto, motor de ½ hp, con fusible interno térmico para evitar el recalientamiento. 
								La caja reductora fabricada en aluminio 
								inyectada, engranajes de acero cementado, montados sobre rulemanes, lo que asegura un alto rendimiento, gran potencia y una gran durabilidad. 
								Central electrónica full, con desaceleración, salida para cerradura incorporada, luz de cortesia y semáforo; con gran alcance de accionamiento de los controles remotos, diseño pequeño, especial para ser comodos en su portabilidad. 
								Destrabe manual por corte de luz muy 
								sencillo, con accionamiento por palanca. 
								Es uno de los motores con mas potencia del mercado, soportando ser colocado en 
								portones de hasta 10 mts2.
							</p>
						</div>
					</div>

				</div>


			</div>
		</section>
		<!-- Faja familia de electronica end-->


		<!-- Faja CTA -->
		<section class="container-fluid faja_destacado_sec">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h4 class="h4_electronica">¿Necesitas asesoramiento?</h4>
							<a href="#" class="btn_cta_electronica btn_sm margin_top_10">CONTACTAR</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faja CTA end-->

		<!-- Newsletter -->
		<?php // include_once('includes/newsletter.inc'); ?>

		<!-- Faja Asesoramiento -->
		<?php include_once('includes/faja-asesoramiento.inc'); ?>

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