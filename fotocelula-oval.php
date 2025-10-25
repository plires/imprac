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
		<meta name="description" content="Fotocélula de seguridad para portones automáticos.">

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

		<title>Fotocélula de seguridad para portones automáticos IMPRAC.</title>
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
							<h1 class="h1_centrales margin_top_30 margin_bottom_60 ">FOTOCELULA OVAL</h1>
							<img class="cerradura_img_titulo" src="img/accesorios/fotocelulas/fotocelula-oval-titulo.png" alt="fotocelula oval titulo">
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

					<div class="col-md-6">
						<a title="FOTOCELULA OVAL - IMPRAC" href="img/accesorios/fotocelulas/fotocelula-oval-a.jpg">
							<img class="w-100 margin_bottom_60" src="img/accesorios/fotocelulas/fotocelula-oval-a.jpg" alt="fotocelula oval a">
						</a>
					</div>

					<div class="col-md-6">
						<a title="FOTOCELULA OVAL - IMPRAC" href="img/accesorios/fotocelulas/fotocelula-oval-b.jpg">
							<img class="w-100 margin_bottom_60" src="img/accesorios/fotocelulas/fotocelula-oval-b.jpg" alt="fotocelula oval b">
						</a>
					</div>

				</div>

				<div class="row">
					<div class="col-md-12 text-center">
						<p class="parrafo_descripcion_textos">
            Fotocélula de seguridad para portones automáticos (par emisor–receptor). Detecta obstáculos mediante haz infrarrojo y ordena detener o invertir el movimiento del portón. Carcasa compacta, bornes a tornillo y LEDs de estado para una instalación rápida y confiable. Ideal para mejorar la protección de personas y vehículos.
						</p>
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