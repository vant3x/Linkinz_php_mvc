<h1>Registrarse</h1>

<?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
		<strong class="alert_green">Registro completado correctamente</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'): ?>
		<strong class="alert_red">Registro fallido :(</strong>

<?php endif; ?>
<?php Utils::borrarSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="POST">
	<label for="nombre">Nombre</label><br>
	<input type="text" name="nombre" required=""><br>

	<label for="apellidos">Apellidos</label><br>
	<input type="text" name="apellidos"><br>

	<label for="email">Email</label><br>
	<input type="email" name="email" required=""><br>
	
	<label for="password">Contraseña</label><br>
	<input type="password" name="password" required=""><br><br>
	
	<input class="p-2" type="submit" class="uk-button uk-button-default" value="Registrarse">
	

</form>