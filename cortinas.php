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
	<meta name="description" content="cortinas metálicas automaticas IMPRAC.">

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

	<title>Cortinas Metálicas automáticas IMPRAC.</title>
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
						<h1 class="h1_centrales margin_top_30 margin_bottom_60 ">&nbsp;</h1>
						<img class="cerradura_img_titulo" src="img/automatizacion/cortinas/cortinas-titulo.png" alt="cortinas titulo">
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Faja foto encabezado end-->

	<!-- Faja cortinas -->
	<section class="container-fluid margin_bottom_60">
		<div class="container">

			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<p class="parrafo_descripcion_textos">
						Motor paralelo para cortina metalica, diseñados para brindar seguridad, potencia y durabildad en todo tipo de aplicaciones residenciales, comerciales e industriales. <br>
						Instalación sencilla y un mantenimiento mínimo
					</p>
				</div>
			</div>

			<div class="row parent-container mb-5">
				
				<div class="col-md-4">
					<a title="CORTINAS METÁLICAS - IMPRAC" href="img/automatizacion/cortinas/cortinas-b.jpg">
						<img class="w-100 margin_bottom_60" src="img/automatizacion/cortinas/cortinas-b.jpg" alt="cortinas imprac b">
					</a>
				</div>

				<div class="col-md-4">
					<a title="CORTINAS METÁLICAS - IMPRAC" href="img/automatizacion/cortinas/cortinas-a.jpg">
						<img class="w-100 margin_bottom_60" src="img/automatizacion/cortinas/cortinas-a.jpg" alt="cortinas imprac a">
					</a>
				</div>

				<div class="col-md-4">
					<a title="CORTINAS METÁLICAS - IMPRAC" href="img/automatizacion/cortinas/cortinas-c.jpg">
						<img class="w-100" src="img/automatizacion/cortinas/cortinas-c.jpg" alt="cortinas imprac c">
					</a>
				</div>

			</div>

			<div class="row">

				<div class="col-md-12 mb-3">
					<p class="parrafo_descripcion_textos text-center">
						<strong>Disponible en distintos modelos según la necesidad:</strong>
					</p>
				</div>

				<div class="col-md-12">
					<p class="parrafo_descripcion_textos">
						<strong>300kg (180W):</strong> Ideal para cortinas de tamaño medio en locales comerciales o garajes.
					</p>

					<p class="parrafo_descripcion_textos">
						<strong>600kg (370W):</strong> Recomendado para cortinas de mayor porte, garantizando un funcionamiento confiable y constante.
					</p>

					<p class="parrafo_descripcion_textos">
						<strong>800kg (400W):</strong> Potencia superior, perfecto para cortinas pesadas de uso frecuente.
					</p>

					<p class="parrafo_descripcion_textos">
						<strong>1000kg (500W):</strong> Máxima potencia y resistencia, perfecto para cortinas industriales, de gran peso y tamaño.
					</p>
				</div>

			</div>
	</section>
	<!-- Faja cortinas end-->

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
		$(function() {
			$('[data-toggle="popover"]').popover()
		})
	</script>


</body>

</html>