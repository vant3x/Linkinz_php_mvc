
	<!-- ASIDE -->
	<aside id="lateral">
		<div id="login" class="block_aside">

		<?php if (!isset($_SESSION['identity'])): ?>
			<h3 class="p-2">Entrar a la web</h3>



			<form action="<?=base_url?>usuario/login" method="POST" class="uk-form-stacked">
				 <div class="uk-margin">
			        <label class="uk-form-label" for="email">Email</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="email" name="email" placeholder="">
			        </div>
			    </div> 

			    <div class="uk-margin">
			        <label class="uk-form-label" for="email">Contraseña</label>
			        <div class="uk-form-controls">
			            <input class="uk-input" id="form-stacked-text" type="password" name="password" placeholder="">
			        </div>
			    </div>

				<input  class="uk-button gray-bg white-text" type="submit" value="Iniciar Sesión"> 
			</form>
			<br>
				<a href="./usuario/registro">Registrarse</a>
		<?php else: ?>

			<h3> <?= $_SESSION['identity']->nombre?> <?=$_SESSION['identity']->apellidos?> </h3>
		<?php endif; ?>
		
	
		<ul>
			<?php if (isset($_SESSION['identity'])): ?>
					<li><a href="<?=base_url?>usuario/perfil">Mi Perfil</a></li>
					<li><a href="<?=base_url?>">Mis Enlaces</a></li>
					<li><a href="<?=base_url?>link/crear">Crear Enlaces</a></li>
					<li><a href="<?=base_url?>categoria/index">Gestionar Categorías</a></li>
					<li><a href="<?=base_url?>usuario/logout">Cerrar Sesión</a></li>
			<?php endif; ?>
		</ul>
		</div>
	</aside>
	<!-- contenido central -->
	<div id="central">