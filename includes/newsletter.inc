<!-- Faja newsletter -->
<section class="container-fluid faja_destacado">
	<div class="container">
		<div class="row">
			<div class="col-md-6 text-center align_vertical_horizontal">
				<div>
					<a href="#"><img class="w-100" src="img/compu.png" alt="compu newsletter"></a>
				</div>
			</div>
			<div class="col-md-6 text-center align_vertical_horizontal">
				<div>
					<h4>¡Recibí todas las novedades <br>en tu e-mail!</h4>
					<form action="" method="post" class="form-inline text-center">
						<input name="origen" type="hidden" value='<?php echo $origen; ?>'>
						<div class="form-group mb-2 text-center">
							<input type="text" name="name" id="name" value='<?php echo $name; ?>' class="form-control" placeholder="Nombre">
						</div>
						<div class="form-group mb-2 text-center">
					 		<input type="email" name="email" id="email" value='<?php echo $email; ?>' class="form-control" placeholder="E-mail">
						</div>

						<div class="error">
						 <ul>
						   <?php foreach ($errors as $error) { ?>
						     <li><?php echo $error; ?></li>
						   <?php } ?>
						 </ul>
						</div>

					  <button id="newsletter" name="newsletter" type="submit" class="btn_newsletter_home">Enviar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Faja newsletter end-->