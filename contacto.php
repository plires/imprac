<?php
require 'vendor/autoload.php';

// Carga el archivo .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$errorsContact = [];
$nameContact = '';
$emailContact = '';
$commentsContact = '';
$origenContact = 'Contacto';

// Verifica si el POST proviene del formulario de contacto
if (isset($_POST['email_contact'])) {
    // reCAPTCHA
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = $_ENV['RECAPTCHA_SECRET_KEY'];
    $url = 'https://www.google.com/recaptcha/api/siteverify';

    $response = file_get_contents(
        $url . '?secret=' . $secretKey . '&response=' . $recaptchaResponse,
    );
    $responseKeys = json_decode($response, true);

    // Validaciones de campos
    include 'validaciones/funciones_validar.php';

    if (campoVacio($_POST['name_contact'])) {
        $errorsContact['name_contact'] = 'Ingresa tu nombre';
    } else {
        $nameContact = htmlspecialchars(trim($_POST['name_contact']));
    }

    if (!comprobar_email($_POST['email_contact'])) {
        $errorsContact['email_contact'] = 'Ingresa un email válido';
    } else {
        $emailContact = htmlspecialchars(trim($_POST['email_contact']));
    }

    if (campoVacio($_POST['comments_contact'])) {
        $errorsContact['comments_contact'] = 'Ingresa tu comentario';
    } else {
        $commentsContact = htmlspecialchars(trim($_POST['comments_contact']));
    }

    // Protección contra SPAM en los campos
    $spamPattern = '/[ДЙЫЖЩЦЧШЭЮЯЁ]|(http[s]?:\/\/|www\.)|(tinyurl\.com|bit\.ly|goo\.gl)/u';
    if (preg_match($spamPattern, $nameContact) || preg_match($spamPattern, $commentsContact)) {
        $errorsContact['recaptcha'] = 'Mensaje identificado como SPAM (contenido sospechoso)';
    }

    // Honeypot adicional (un campo oculto en el formulario)
    if (!empty($_POST['honeypot_field'])) {
        $errorsContact['recaptcha'] = 'Mensaje identificado como SPAM (honeypot activado)';
    }

    // Verificación de reCAPTCHA
    if (empty($responseKeys['success']) || $responseKeys['score'] < 0.5) {
        $errorsContact['recaptcha'] = 'Error: reCAPTCHA no válido o actividad sospechosa.';
    }

    $ip = $_SERVER['REMOTE_ADDR'];
    $file = 'ip_attempts.log';
    $timeLimit = 120; // 60 segundos
    $maxAttempts = 3; // Máximo de intentos permitidos

    // Leer el contenido del archivo de registro
    $attempts = [];
    if (file_exists($file)) {
        $attempts = json_decode(file_get_contents($file), true) ?? [];
    }

    // Verificar la IP en el archivo de registro
    if (isset($attempts[$ip])) {
        $timeSinceLastAttempt = time() - $attempts[$ip]['last_attempt'];
        if ($timeSinceLastAttempt < $timeLimit) {
            if ($attempts[$ip]['count'] >= $maxAttempts) {
                $errorsContact['attempts'] =
                    'Demasiados intentos desde esta IP, por favor espera al menos 120 segundos para volver a enviar.';
            }
            $attempts[$ip]['count']++;
        } else {
            // Reinicia el contador si ya pasó el tiempo límite
            $attempts[$ip]['count'] = 1;
        }
        $attempts[$ip]['last_attempt'] = time();
    } else {
        // Registrar nueva IP
        $attempts[$ip] = [
            'last_attempt' => time(),
            'count' => 1,
        ];
    }

    // Guardar los datos actualizados en el archivo
    file_put_contents($file, json_encode($attempts));

    if (count($errorsContact) === 0) {
        include_once 'php/envio-contact.php';
    }
}
?>
<!-- formulario Contacto end-->


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
	<?php $current = 'contacto'; ?>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Contactate con Imprac. Fabricamos Motores e insumos para portones automaticos.">

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

	<title>Contacto con Imprac - Automatizacion de portones</title>
</head>

<body>
	<!-- Tag Manager Body -->
	<?php include_once 'includes/tag_manager_head.inc'; ?>

	<!-- Header -->
	<?php include_once 'includes/header.inc'; ?>

	<!-- WhatsApp -->
	<?php include_once 'includes/wapp.inc'; ?>

	<!-- Faja foto encabezado -->
	<section class="container-fluid fondo_contacto">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center align_vertical_horizontal">
					<div>
						<h2 class="h2_contacto margin_top_30 margin_bottom_60 ">CONTACTO</h2>
						<div class="row">
							<div class="col-md-6 offset-md-3">
								<p>
									<span class="frase_contacto">
										Si necesitas información no dudes en contactarte con
										nosotros por cualquiera de nuestras
										vías de comunicación.
									</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Faja foto encabezado end-->

	<!-- Faja foto encabezado -->
	<section class="container-fluid fondo_gris_contacto">
		<div class="container">
			<div class="row">

				<div class="contacto col-md-6 align_vertical_top margin_top_60">
					<div>
						<span>
							<a class="datos" href="tel:541144884418">
								<i class="fas fa-phone"></i>
								+54 11.4488.4418
							</a>
						</span> <br>
						<span>

							<a class="datos" href="mailto:info@imprac.com.ar">
								<i class="fas fa-envelope"></i>
								info@imprac.com.ar
							</a>
						</span><br>
						<span>
							<a class="datos" href="https://maps.app.goo.gl/dpkErSLFZYFFyZuu7" target="_blank">
								<i class="fas fa-map-marker"></i>
								Barragan 855, Ciudadela Norte <br>
								Buenos Aires - Argentina.
							</a>
						</span>
					</div>
				</div>

				<div class="col-md-6 margin_top_60 margin_bottom_60">
					<div>
						<form id="contactForm" method="post" action="">
							<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

							<input type="text" name="honeypot_field" style="display:none;">

							<input required name="origen_contact" type="hidden" value='<?php echo $origenContact; ?>'>

							<div class="form-group">
								<input type="text" class="form-control" id="name_contact" name="name_contact" aria-describedby="nameHelp" value="<?= $nameContact ?>" placeholder="Nombre *">
							</div>

							<div class="form-group">
								<input required type="email" class="form-control" id="email_contact" name="email_contact" aria-describedby="emailHelp" value="<?= $emailContact ?>" placeholder="Email *">
							</div>

							<textarea required id="comments_contact" name="comments_contact" rows="4" class="form-control" aria-describedby="commentslHelp" placeholder="Comentarios *"><?= $commentsContact ?></textarea>

							<button type="submit" name="contact" class="btn_contacto">Enviar</button>

							<div class="error">
								<ul>
									<?php foreach ($errorsContact as $error) { ?>
										<li><?php echo $error; ?></li>
									<?php } ?>
								</ul>
							</div>

						</form>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- Faja foto encabezado end-->

	<!-- mapa -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.1226084647187!2d-58.53505638423247!3d-34.626341766203524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc818b6478b11%3A0x2943b26eb161df7e!2sIMPRAC+Automatizacion+De+Portones!5e0!3m2!1ses-419!2sar!4v1527773283003" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen>
	</iframe>
	<!-- mapa end-->

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
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Comun a todos los productos -->
	<script type="text/javascript" src="js/productos.js"></script>



	<script src="https://www.google.com/recaptcha/api.js?render=6LeQLIMqAAAAAGPnWIIfJaGQ7dnWTQMbfbPrlDyY"></script>
	<script>
		document.getElementById('contactForm').addEventListener('submit', function(event) {
			event.preventDefault(); // Detiene el envío automático del formulario

			grecaptcha.ready(function() {
				grecaptcha.execute('6LeQLIMqAAAAAGPnWIIfJaGQ7dnWTQMbfbPrlDyY', {
					action: 'submit'
				}).then(function(token) {
					// Asigna el token al campo oculto
					document.getElementById('g-recaptcha-response').value = token;

					// Envía el formulario
					document.getElementById('contactForm').submit();
				});
			});
		});
	</script>


</body>

</html>