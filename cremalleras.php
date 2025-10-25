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
		<meta name="description" content="Cremalleras de nylon, de hierro u nylon reforzado IMPRAC.">

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

		<title>Cremalleras de nylon, de hierro u nylon reforzado IMPRAC.</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once 'includes/tag_manager_head.inc'; ?>
		
		<!-- Header -->
		<?php include_once 'includes/header.inc'; ?>

		<!-- WhatsApp -->
		<?php include_once 'includes/wapp.inc'; ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_gris fondo_gris_accesorios">
			<div class="container">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h1 class="h1_centrales h1_accesorios margin_top_30 margin_bottom_60 ">CREMALLERAS</h1>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- Faja semaforos -->
		<section class="container-fluid margin_bottom_60">
			<div class="container">

				<div class="row parent-container margin_bottom_60">
					<div class="col-lg-6">
						<img class="w-100 margin_bottom_30" src="img/accesorios/cremalleras/cremalleras-a.jpg" alt="cremalleras nylon imprac">
					</div>

					<div class="col-lg-6 align_vertical_horizontal">
						<div>
							<h4 class="color_secundario bold">Cremallera Nylon 1.5 Mts.</h4>
							<p class="parrafo_descripcion_textos">
								Modulo 4, compatible con la mayoría de los automatismos del mercado, fabricada en nylon industrial poliamida con refuerzo de fibra de vidrio para lograr mayor resistencia y durabilidad; inclusive bajo las peores 
								inclemencias del tiempo. 
								Montada en angulo galvanizado y 
								perforaciones ajustables para mejorar la 
								instalación. 
								Presentada en tramos de 1,5 mts de largo y modulos de 30cm.  
							</p>
						</div>
					</div>
				</div>

				<div class="row parent-container margin_bottom_60">
					<div class="col-lg-6">
						<img class="w-100 margin_bottom_30" src="img/accesorios/cremalleras/cremalleras-b.jpg" alt="cremalleras hierro imprac">
					</div>

					<div class="col-lg-6 align_vertical_horizontal">
						<div>
							<h4 class="color_secundario bold">Cremallera HIERRO 1 Mt.</h4>
							<p class="parrafo_descripcion_textos">
								Modulo 4, compatible con la mayoría de los automatismos del mercado, hierro sincado de 10 mm de espesor con soportes y separadores regulables de fácil instalación y adaptabilidad. Presentada en tramos de 1 mt de largo.  
							</p>
						</div>
					</div>
				</div>

				<div class="row parent-container margin_bottom_60">
					<div class="col-lg-6">
						<img class="w-100 margin_bottom_30" src="img/accesorios/cremalleras/cremalleras-c.jpg" alt="cremalleras nylon reforzada imprac">
					</div>

					<div class="col-lg-6 align_vertical_horizontal">
						<div>
							<h4 class="color_secundario bold">Cremallera Nylon REFORZADA 1.5 Mts.</h4>
							<p class="parrafo_descripcion_textos">
								Fabricada con tecnología POLI-FLEX, 
								poliamida industrial más resistente, flexible y perdurable en el tiempo. Modulo 4, 
								compatible con la mayoría de los 
								automatismos del mercado, inclusive bajo las peores inclemencias del clima. 
								Montada en angulo galvanizado y 
								perforaciones ajustables para mejorar la 
								instalación. 
								Presentada en tramos de 1,5 mts de largo, compuesta de modulos encastrables de 30cm.
							</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- Faja semaforos end-->

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

		<script type="text/javascript">
			$(function () {
			  $('[data-toggle="popover"]').popover()
			})
		</script>


	</body>
</html>