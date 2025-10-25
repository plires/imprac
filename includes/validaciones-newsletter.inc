<!-- Validaciones newsletter -->
<?php

$errors=array();
$name="";
$email="";
$origen="Newsletter";

/*Si el post viene por el formulario*/
if (isset($_POST['newsletter'])){
	include ('validaciones/funciones_validar.php');

	if(campoVacio($_POST['name'])){
	  $errors['name']='Ingresa tu nombre';
	} else {
	  $name = $_POST['name'];
	}

	if (!comprobar_email($_POST['email'])){
	  $errors['email']='Ingresa un email valido';
	} else {
	  $email = $_POST['email'];
	}

	if (count($errors) === 0){
		include_once("php/envio-newsletter.php");
	}

}

?>
<!-- Validaciones newsletter end-->