<h1>Todas las Categorías</h1>
<a href="" class="uk-button uk-button-primary">Crear Categoría</a>
<br><br>

<table class=" uk-table-divider">

    <thead>
        <tr>
            <th class="uk-width-small">ID</th>
            <th class="pr-2">Nombre </th>
            <th class="pl-30">Acciones </th>
            <th class="pl-30"> </th>
        </tr>
    </thead>
    <tbody>
    	<?php while($categoria = $categorias->fetch_object()): ?>

        <tr class="align-right">
            <td><?=$categoria->id?></td>
            <td><?=$categoria->nombre?> </td>
            <td> 
            	<button class="uk-button uk-button-danger btn-border-radius pl-30" type="button">Eliminar <i class="fas fa-trash"></i></button>

            </td> 
            <td> 
            	<button class="uk-button uk-button-default btn-green btn-border-radius pl-30" type="button">Editar <i class="fas fa-pen"></i></button>

            </td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>