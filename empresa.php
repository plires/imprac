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
  	<?php $current = 'empresa'; ?>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="Imprac es una empresa que comercializa motores para portones e insumos para la automatizacion de los mismos">

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

		<!-- Plugin Slick (Carrousel logos) CSS -->
		<link rel="stylesheet" type="text/css" href="plugins/slick.css">
		<link rel="stylesheet" type="text/css" href="plugins/slick-theme.css">

		<!-- Custom CSS -->
		<link rel="stylesheet" type="text/css" href="css/app.css">

		<title>Imprac - Automatizacion de portones</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once 'includes/tag_manager_head.inc'; ?>
		
		<!-- Header -->
		<?php include_once 'includes/header.inc'; ?>

		<!-- WhatsApp -->
		<?php include_once 'includes/wapp.inc'; ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_empresa">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							&nbsp;
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja Nosotros Texto -->
		<section class="container margin_bottom_60">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="color_principal margin_top_30 margin_bottom_60 ">Sobre Nosotros</h2>
					<p>
						Somos una empresa dedicada a la fabricación y distribución de insumos y accesorios para 
						automatizar portones; con más de 20 años de experiencia en el mercado y una filosofía abocada al servicio y la pronta respuesta, entendiendo la importancia del respaldo que necesita este 
						tipo de mercado.
					</p>
					<p>
						Con productos 100% fabricación nacional, apostando al desarrollo de la industria ARGENTINA, con la ventaja que esto implica en la seguridad de dar garantía total en stock y repuestos.
					</p>
					<p>
						Venta exclusiva al gremio con productos robustos y de larga duración como motores, centrales electrónicas, controles remotos, cerraduras, semáforos, cremalleras, fotocélulas 
						y barreras vehiculares.
					</p>
				</div>
			</div>
		</section>
		<!-- Faja Nosotros Texto end-->

		<!-- Galeria de imagenes imprac start -->
		<section class="galeria slider-g">
		  <div>
		    <img class="w-100" src="img/galeria/imprac-a.jpg" alt="galeria imprac a">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-b.jpg" alt="galeria imprac b">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-g.jpg" alt="galeria imprac g">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-h.jpg" alt="galeria imprac h">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-i.jpg" alt="galeria imprac i">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-c.jpg" alt="galeria imprac c">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-d.jpg" alt="galeria imprac d">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-e.jpg" alt="galeria imprac e">
		  </div>
		  <div>
		    <img class="w-100" src="img/galeria/imprac-f.jpg" alt="galeria imprac f">
		  </div>
		</section>
		<!-- Galeria de imagenes imprac end -->

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

		<!-- Imagen Footer -->
		<?php include_once 'includes/imagen-footer.inc'; ?>

		<!-- Header -->
		<?php include_once 'includes/footer.inc'; ?>


		<!-- jQuery primero, luego Popper.js, luego Bootstrap JS -->
		<!-- jQuery antiguo por incompatibilidad de galeria -->
		<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> 
		<script type="text/javascript" src="js/popper.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>

		<!-- Plugin Slick (Carrousel logos) JS -->
  	<script src="plugins/slick.min.js" type="text/javascript" charset="utf-8"></script>

		<!-- Scripts comunes a esta pagina -->
		<script type="text/javascript" src="js/empresa.js"></script>

	</body>
</html>