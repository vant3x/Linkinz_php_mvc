<h1>Crear Categoría</h1>

<form action="<?=base_url?>link/save" method="POST" class="uk-form-stacked">
	<br>
    <label for="nombre">Titulo </label>
    <input type="text" name="titulo" require id="" class="uk-input uk-form-width-medium"><br>
     <div class="uk-margin">
        <div class="uk-inline">
        	<label for="titulo">Enlace</label>

            <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
            <input class="uk-input uk-form-width-large" type="text" name="link">
        </div>
    </div>
    
    <input type="submit" value="Guardar" class="uk-button uk-button-primary btn-info" >
</form>


