<!-- Validaciones del Newsletter -->
<?php // include_once("includes/validaciones-newsletter.inc"); ?>

<!doctype html>
<html lang="es">
	<head>
		<!-- Tag Manager Head -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>

  	<!-- Indica pagina activa en el nav menu -->
  	<?php $current = 'contacto'; ?>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="agradecimiento desde nuestro sitio por su contacto.">

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

		<title>Gracias Contacto - Imprac</title>
	</head>

	<body>
		<!-- Tag Manager Body -->
  	<?php include_once("includes/tag_manager_head.inc"); ?>
		
		<!-- Header -->
		<?php include_once('includes/header.inc'); ?>

		<!-- WhatsApp -->
		<?php include_once("includes/wapp.inc") ?>
		
		<!-- Faja foto encabezado -->
		<section class="container-fluid fondo_accesorios">
			<div class="container padding_top_30">
				<div class="row">

					<div class="col-md-12 text-center align_vertical_horizontal">
						<div>
							<h1 class="h2_electronica margin_top_30 margin_bottom_30 ">ENVIO EXITOSO</h1>
								<p>
									<span class="frase_slide_mayor">
										GRACIAS POR TU CONTACTO
									</span>
								</p>
								<p>
									<span class="frase_slide_menor">
										Para nosotros es un gran placer recibir una nueva consulta, estamos muy contentos de contar con la oportunidad de entablar este vínculo. <br>
										Nos aseguraremos que nuestro equipo te brinde todas las respuestas que necesitas y te ofreceremos toda la variedad de productos y servicios que nuestra empresa posee. <br>
										Gracias por tu visita, esperamos verte pronto.
									</span>
								</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- Faja foto encabezado end-->

		<!-- CTA familia de productos home -->
		<section class="familia_home container margin_bottom_60">
			<div class="row text-center">

				<div class="col-lg-12 text-center bold">
					<h2>SEGUI NAVEGANDO</h2>
				</div>

				<div class="col-lg-4">
					<a href="automatizacion-portones.php"><img class="icono_familia_home margin_bottom_15" src="img/icono_automatizacion.png" alt="icono automatizacion"></a>
					<h3><a class="h3_familia_home" href="automatizacion-portones.php">AUTOMATIZACIÓN</a></h3>
					<p class="parrafo_familia_home">
						Completa línea de dispositivos electrónicos utilizados en la automatización de portones.
					</p>
				</div>

				<div class="col-lg-4">
					<a href="electronica.php"><img class="icono_familia_home margin_bottom_15" src="img/icono_electronica.png" alt="icono electronica"></a>
					<h3><a class="h3_familia_home" href="electronica.php">ELECTRÓNICA</a></h3>
					<p class="parrafo_familia_home">
						Línea de dispositivos electrónicos utilizadosen la automatización de portones.
					</p>
				</div>

				<div class="col-lg-4">
					<a href="accesorios.php"><img class="icono_familia_home margin_bottom_15" src="img/icono_accesorios.png" alt="icono accesorios"></a>
					<h3><a class="h3_familia_home" href="accesorios.php">ACCESORIOS</a></h3>
					<p class="parrafo_familia_home">
						Amplia gama de componentes necesarios para el funcionamiento de los distintos sistemas.
					</p>
				</div>

			</div>
		</section>
		<!-- CTA familia de productos home end -->

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

	</body>
</html>